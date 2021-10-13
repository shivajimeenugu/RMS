<?php

namespace App\Http\Controllers;
use App\Models\tran;
use App\Models\lib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use League\CommonMark\Extension\CommonMark\Node\Block\ListData;

class CoreController extends Controller
{

    public function AddTransaction(Request $req)
    {

        // $user_id=1; //owner
        // $amount=100;
        // $members=[2,3];
        // $partyCount=count($members);
        // $perHead=$amount/$partyCount;
        // $remarks="test2";

       $user_id=$req->user()->id; //owner
        $amount=$req->amount;
        $members=$req->get('members');
        $partyCount=count($members);
        $perHead=round($amount/$partyCount);
        $remarks=$req->remarks;

        $tran=new tran;
        $tran->tamt=$amount;
        $tran->towner=$user_id;
        $tran->tremarks=$remarks;
        date_default_timezone_set("Asia/Kolkata");
        $tran->tdate=date("Y-m-d");
        $tran->save();

        $tid=$tran::all()->last()->tid;
        //dd($t);



        // $lib=new lib;
        // foreach($members as $mem )
        // {
        //     $lib->ltid=$tid;
        //     $lib->luid=$mem;
        //     $lib->lamt=$perHead;
        //     $lib->save();

        // }

        foreach($members as $mem )
        {
            $lib=lib::create([
                'ltid'=>$tid,
                'luid'=>$mem,
                'lamt'=>$perHead,

            ]);

        }


       // return response(["Msg"=>"Sucess"]);


        //$partysList=explode(",",$partys);


       // $user=User::where("id",$user_id)->first();
      //  $ownerName=$req->user()->name;

        // $TransactionDetails=Transaction::create([
        //     "users_id"=>$user_id,
        //     "amount"=>$amount,
        //     "patys"=>$partys,
        //     "remarks"=>$remarks
        // ]);

        // return response(['message' => $TransactionDetails], 200);
        // $OwnerTableName=str_replace(" ","",$ownerName)."table";

        // $data=DB::select(DB::raw('insert into '.$OwnerTableName.' (transactions_id,participants) values('.$TransactionDetails->id.',"'.$partys.'")'));

       return redirect('dashboard');
    }

    public function GetMe(Request $req)
    {
        $owner=$req->user();
        $name=$owner->name;
        $id=$owner->id;
        $OwnerTableName=str_replace(" ","",$name)."table";
        //SELECT * from shivaji2table,transactions where shivaji2table.transactions_id=transactions.id;
        $AssetsData=DB::select(DB::raw('select * from '.$OwnerTableName.',transactions where '.$OwnerTableName.'.transactions_id=transactions.id and status=1 ;'));

        //SELECT * from transactions where transactions.patys LIKE "%5%";
        $LibsData=DB::select(DB::raw('select * from transactions where transactions.patys like "%'.$id.'%";'));


        $MyAsset=[];
        foreach($AssetsData as $t)
        {

            $partysList=explode(",",$t->patys);
            $partyCount=count($partysList)+1;
            $perHead=$t->amount/$partyCount;
           // dd($partysList,$MyAsset,$partyCount,$perHead,$t->amount);
            foreach($partysList as $p)
            {
                if(array_key_exists($p,$MyAsset))
                {
                    $MyAsset[$p]=$MyAsset[$p]+$perHead;

                }
                else
                {
                    $MyAsset[$p]=$perHead;
                }
            }
        }
        //dd($AssetsData,$LibsData,$MyAsset);

        $MyLibs=[];
        foreach($LibsData as $l)
        {
            $partysList2=explode(",",$l->patys);
            $partyCount2=count($partysList2)+1;
            $perHead2=$l->amount/$partyCount2;
                if(array_key_exists($l->users_id,$MyLibs))
                {
                    $MyLibs[$l->users_id]=$MyLibs[$l->users_id]+$perHead2;

                }
                else
                {
                    $MyLibs[$l->users_id]=$perHead2;
                }
        }



        $BalSheet=$MyAsset;
        foreach($MyLibs as $key => $value)
        {
            //dd($key,$value);
            if(array_key_exists($key,$BalSheet))
            {
                $BalSheet[$key]=(($BalSheet[$key])-($value));
            }
            else{
             $BalSheet[$key] =(-1*($value));
            }
        }

        dd($MyAsset,$MyLibs,$BalSheet);


    }
}
