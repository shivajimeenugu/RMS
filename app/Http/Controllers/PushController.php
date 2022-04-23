<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Notifications\PushDemo;
use App\Notifications\RmsTestEmail;
use App\Notifications\Test;
use App\Models\User;
use Auth;
use Notification;

class PushController extends Controller
{

    // public function __construct(){
    //   $this->middleware('auth');
    // }

    /**
     * Store the PushSubscription.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){

        $this->validate($request,[
            'endpoint'    => 'required',
            'keys.auth'   => 'required',
            'keys.p256dh' => 'required'
        ]);
        $endpoint = $request->endpoint;
        $token = $request->keys['auth'];
        $key = $request->keys['p256dh'];
        $user = Auth::user();

        $user->updatePushSubscription($endpoint, $key, $token);

        return response()->json(['success' => true],200);
    }

    public function push(){
        // dd("g");
        $user = Auth::user()->name;
        // dd($user);
        $data=["Sender"=>$user];

        Notification::send(User::find(1),new PushDemo($data));
        Notification::send(User::find(1),new RmsTestEmail($data));


        // if()

        return redirect()->back();
    }

    public function push2(){
        // dd("g");
        $data=["sender"=>"Hii Shivaji"];
        Notification::send(User::find(1),new Test($data));

        return redirect()->back();
    }

}
