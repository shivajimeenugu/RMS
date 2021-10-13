<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\lib;
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
        return view("portfolio",["AssetSum"=>round($a),"LibsSum"=>round($l)]);
    }

    public function add_roommates(Request $req){
        $owner=$req->user();
        $name=$owner->name;
        $id=$owner->id;
        $users=User::all();//->except($id);

        return view("add_roommates",["users"=>$users,"ownerid"=>$id]);
    }

    public function history(){
        return view("history");
    }

    public function test(){
        return response("True",200);
    }

    //DoneRecive
    public function DoneRecive(Request $req){
        $cuser=$req->user()->id;
        $euid=Crypt::decrypt($req->id);
        $Ts=DB::select(DB::raw('SELECT lid from trans,libs WHERE trans.tid=libs.ltid and trans.towner='.$cuser.' and libs.luid='.$euid.' and libs.lsts=1;'));
        //dd($Ts[0]->lid);
        foreach($Ts as $t)
        {
            $lib = lib::find($t->lid);

            $lib->lsts = 0;

            $lib->save();
        }
        return redirect('balancesheet');
        //return response(["cuser"=>$req->user()->id,'uid'=>Crypt::decrypt($req->id)]);
    }
}
