<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\lib;
use App\Models\ltran;
use App\Models\llib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
class dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $users=User::all();
        return view("dashboard",['users'=>$users]);
    }

    public function balancesheet(Request $req){

        $users=User::all();
        $owner=$req->user();
        $name=$owner->name;
        $id=$owner->id;
        $data=[];
        $AssetsData=DB::select(DB::raw('SELECT libs.luid,ifnull(sum(libs.lamt),0) AS myasset  FROM trans LEFT JOIN libs ON trans.tid=libs.ltid and trans.towner='.$id.' and libs.lsts=1 GROUP BY libs.luid;'));

        $LibsData=DB::select(DB::raw('SELECT trans.towner,ifnull(sum(libs.lamt),0) AS mylib FROM trans LEFT JOIN libs ON trans.tid=libs.ltid and libs.luid='.$id.' and libs.lsts=1 GROUP BY trans.towner;'));

        foreach($AssetsData as $a)
        {
            $data[$a->luid]=['id'=>$a->luid,'myasset'=>$a->myasset,'mylib'=>0];
        }

        foreach($LibsData as $l)
        {
            if(array_key_exists($l->towner,$data))
            {
                $data[$l->towner]['mylib']=$l->mylib;
            }
            else{
                $data[$l->towner]['id']=$l->towner;
                $data[$l->towner]['myasset']=0;
                $data[$l->towner]['mylib']=$l->mylib;

            }
        }
        //dd($data[2]->id);
        $BalSheet=[];
        foreach($data as $d)
        {
            $BalSheet[$d['id']]=['id'=>$d['id'],'bal'=>$d['myasset']-$d['mylib']];
        }

        //dd($BalSheet);





        return view('balancesheet',['users'=>$users,'BalSheet'=>$BalSheet]);
    }

    public function liabalities(Request $req){
        $users=User::all();
        $owner=$req->user();
        $name=$owner->name;
        $id=$owner->id;
        $data=[];
        $AssetsData=DB::select(DB::raw('SELECT libs.luid,ifnull(sum(libs.lamt),0) AS myasset  FROM trans LEFT JOIN libs ON trans.tid=libs.ltid and trans.towner='.$id.' and libs.lsts=1 GROUP BY libs.luid;'));

        $LibsData=DB::select(DB::raw('SELECT trans.towner,ifnull(sum(libs.lamt),0) AS mylib FROM trans LEFT JOIN libs ON trans.tid=libs.ltid and libs.luid='.$id.' and libs.lsts=1 GROUP BY trans.towner;'));

        foreach($AssetsData as $a)
        {
            $data[$a->luid]=['id'=>$a->luid,'myasset'=>$a->myasset,'mylib'=>"0"];
        }

        foreach($LibsData as $l)
        {
            if(array_key_exists($l->towner,$data))
            {
                $data[$l->towner]['mylib']=$l->mylib;
            }
            else{
                $data[$l->towner]['id']=$l->towner;
                $data[$l->towner]['myasset']="0";
                $data[$l->towner]['mylib']=$l->mylib;

            }
        }
        //dd($AssetsData,$LibsData,$data);

        return view('liabalities',['users'=>$users,'data'=>$data]);
    }

    public function portfolio(Request $req){
        $owner=$req->user();
        $name=$owner->name;
        $id=$owner->id;
        $LibsSum=DB::select(DB::raw('SELECT ifnull(sum(lamt),0) as amt FROM trans,libs WHERE tid=ltid and luid='.$id.' and towner!='.$id.' and lsts=1;'));
        $AssetSum=DB::select(DB::raw('SELECT ifnull(sum(lamt),0) as amt FROM trans,libs WHERE tid=ltid and towner='.$id.' and luid!='.$id.' and lsts=1;'));

        $a=$AssetSum[0]->amt;
        $l=$LibsSum[0]->amt;
        $a=round($a);
        $l=round($l);

        if($a==$l)
        {
            $a=0;
            $l=0;
        }

        return view("portfolio",["AssetSum"=>$a,"LibsSum"=>$l]);
    }

    public function add_roommates(Request $req){
        $owner=$req->user();
        $name=$owner->name;
        $id=$owner->id;
        $users=User::all();//->except($id);

        return view("add_roommates",["users"=>$users,"ownerid"=>$id]);
    }

    public function history(Request $req){
        $users=User::all()->pluck('name', 'id')->toArray();
        $owner=$req->user();
        $name=$owner->name;
        $id=$owner->id;
        $data=[];
        // $AssetsData=DB::select(DB::raw('SELECT llibs.lluid,ifnull(sum(llibs.llamt),0) AS myasset  FROM ltrans LEFT JOIN llibs ON ltrans.ltid=llibs.lltid and ltrans.ltowner='.$id.'  GROUP BY llibs.lluid;'));

        // $LibsData=DB::select(DB::raw('SELECT ltrans.ltowner,ifnull(sum(llibs.llamt),0) AS mylib FROM ltrans LEFT JOIN llibs ON ltrans.ltid=llibs.lltid and llibs.lluid='.$id.'  GROUP BY ltrans.ltowner;'));

        // foreach($AssetsData as $a)
        // {
        //     $data[$a->lluid]=['id'=>$a->lluid,'myasset'=>$a->myasset,'mylib'=>"0"];
        // }

        // foreach($LibsData as $l)
        // {
        //     if(array_key_exists($l->ltowner,$data))
        //     {
        //         $data[$l->ltowner]['mylib']=$l->lmylib;
        //     }
        //     else{
        //         $data[$l->ltowner]['id']=$l->ltowner;
        //         $data[$l->ltowner]['myasset']="0";
        //         $data[$l->ltowner]['mylib']=$l->mylib;

        //     }
        // }
       // dd($data);

       $RData=DB::select(DB::raw('SELECT * FROM ltrans WHERE ltrans.ltowner='.$id.';'));
       $PData=DB::select(DB::raw('SELECT * FROM ltrans WHERE ltrans.ltremarks='.$id.';'));

           //dd($users);

        return view("history",['users'=>$users,'RData'=>$RData,'PData'=>$PData]);
    }

    public function rockstars(){
        return view("rockstars");
    }

    public function test(Request $req){
        $id=Crypt::decrypt($req->id);
        if(User::find($id))
        {
            $user = User::find($id);
            $userName=$user->name;
            $user->delete();
        }
        //return response(["msg"=>$userName." Removed Sucessfully","id"=>$id],200);
        return redirect('add_roommates')->with('status', 'Removed Sucessfully');;
    }

    //DoneRecive
    public function DoneRecive(Request $req){
        $cuser=$req->user()->id;
        $euid=Crypt::decrypt($req->id);
        $T1=DB::select(DB::raw('SELECT * from trans,libs WHERE trans.tid=libs.ltid and trans.towner='.$cuser.' and libs.luid='.$euid.' and libs.lsts=1;'));
        $T=DB::select(DB::raw('SELECT * from trans,libs WHERE trans.tid=libs.ltid and trans.towner='.$euid.' and libs.luid='.$cuser.' and libs.lsts=1;'));

        $Ts1=DB::select(DB::raw('SELECT lid from trans,libs WHERE trans.tid=libs.ltid and trans.towner='.$cuser.' and libs.luid='.$euid.' and libs.lsts=1;'));
        //dd($Ts[0]->lid);
        $MyLib=0;
        $MyAsset=0;
        $MyAssetIds=[];
        $MyLibIds=[];
        foreach($Ts1 as $t)
        {
            $lib1 = lib::find($t->lid);
            array_push($MyAssetIds,$t->lid);
            $lib1->lsts = 0;
            $MyAsset=$MyAsset+$lib1->lamt;
            $lib1->save();
        }

        $Ts=DB::select(DB::raw('SELECT lid from trans,libs WHERE trans.tid=libs.ltid and trans.towner='.$euid.' and libs.luid='.$cuser.' and libs.lsts=1;'));
        //dd($Ts[0]->lid);
        foreach($Ts as $t)
        {
            $lib = lib::find($t->lid);
            array_push($MyLibIds,$t->lid);
            $lib->lsts = 0;

            $MyLib=$MyLib+$lib->lamt;

            $lib->save();
        }


        $tran=new ltran;
        $tran->ltamt=$MyAsset-$MyLib;
        $tran->ltowner=$req->user()->id;
        $tran->ltremarks=$euid;
        date_default_timezone_set("Asia/Kolkata");
        $tran->ltdate=date("Y-m-d");
        $tran->save();
/*
        $tid=$tran::all()->last()->ltid;


        $lib=new llib;
        foreach($T1 as $t)
        {
            $lib->ollid=$t->lid;
            $lib->lltid=$tid;
            $lib->lluid=$t->luid;
            $lib->llamt=$t->lamt;
            $lib->save();
        }
        foreach($T as $t)
        {
            $lib->ollid=$t->lid;
            $lib->lltid=$tid;
            $lib->lluid=$t->luid;
            $lib->llamt=$t->lamt;
            $lib->save();
        }

*/

        return redirect('balancesheet')->with('status', 'Transaction Recived');
        //return response(["cuser"=>$req->user()->id,'uid'=>Crypt::decrypt($req->id)]);
    }
}
