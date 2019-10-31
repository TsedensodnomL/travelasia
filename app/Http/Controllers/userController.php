<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class userController extends Controller
{
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
    }

    public function orderedit($username){

    }

    public function orderupdate(Request $req, $id){

    }

    public function ordershow($username){

    }

    public function orderdelete($username){
        
    }


}
