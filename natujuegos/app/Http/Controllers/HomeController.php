<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function nit()
    {
              $notifications = Notification::all();

        return view('notifications', [
            'notifications' => $notifications]);
    }


public function indexnotification(){
$user = auth()->user()->id;

$notifications = Notification::where('user_id',auth()->user()->id)
                            ->orderBy('id','DESC')->get();

$enviadores = [];                            
foreach ($notifications as $notification) {
    $sender_id = $notification->sender_id;

    $sender = DB::table('users')
    ->select('name')
    ->join('notifications', 'notifications.sender_id', '=', 'users.id')
    ->where('users.id', $sender_id)
    ->get();

    $notification['sender'] = $sender;
}
//dd($notifications[0]['sender']);

 return view('notifications',['notifications' => $notifications, 'enviadores'=> $enviadores]);
}


}
