<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class CoreController extends Controller
{

    public function AddTransaction(Request $req)
    {
        $user_id=3; //owner
        $amount=100;
        $partys="3,4,5";
        $remarks="currys";
        $partysList=explode(",",$partys);
        $partyCount=count($partysList);
        $perHead=$amount/$partyCount;
        $user=User::where("id",$user_id)->first();
        $ownerName=$user->name;

        $TransactionDetails=Transaction::create([
            "users_id"=>$user_id,
            "amount"=>$amount,
            "patys"=>$partys,
            "remarks"=>$remarks

        ])->get();

        return response(['message' => $TransactionDetails], 200);
        /*
        $OwnerTableName=str_replace(" ","",$ownerName)."table";

        $data=DB::select(DB::raw('insert into '.$OwnerTableName.' '));*/






    }
}
