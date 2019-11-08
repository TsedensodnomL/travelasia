<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class userController extends Controller
{
    
    public function index(){
        $table = DB::table('category')->get();
        if(session::has('username')){
            return view('index', ['table'=>$table]);
        }
        else
            return redirect('/login');
    }

    public function edit($username){
        $user = DB::table('user')->where('username','=',$username)->first();
        return view('user', ['user' => $user]);
    }

    public function update(Request $req, $id){
        $email = $req->email;
        $pass = $req->pass;
        $fname = $req->fname;
        $lname = $req->lname;
        $birth = $req->birthdate;
        $nation = $req->nationality;
        $gender = $req->gender;
        $phone = $req->phone;

        $status = DB::table('user')
        ->where('username', 'claude')
        ->update(
            ['email'=> $email, 'password'=>$pass, 
            'firstname'=>$fname, 'gender'=>$gender, 
            'lastname'=>$lname, 'birthdate'=>$birth, 
            'nationality'=>$nation, 'phone'=>$phone]
        );
        $path = "/user/".session('username');
        return redirect($path);
    }

    public function orderstore(Request $req, $tid){
        $quantity = $req->count;
        $user = session('username');
        $travelid = $tid;
        $id = '191108002';
        $status = DB::table('orders')
                                ->insert(['id'=>$id, 'user_username'=>$user,
                                          'travel_id'=>$travelid, 'traveler_number'=>$quantity]);
        $path = session('username').'/order';
        return redirect($path);
    }

    public function ordershow($username){
        $order = DB::table('orders')
                                    ->join('travel','travel.id','=','orders.travel_id')
                                    ->where('orders.user_username',$username)
                                    ->select('orders.*', 'travel.name', 'travel.start', 'travel.end')
                                    ->get();
        
        return view('userorder', ['order'=>$order]);
    }

    public function orderdelete($id, $idd){
        
        $status = DB::table('orders')->where('id',$idd)
                                       ->delete();
                                       
        $url = '/'.session('username').'/order';
        return redirect($url);
    }

    public function logout(Request $req){
        $req->session()->flush();
        return redirect('/');
    }
}
