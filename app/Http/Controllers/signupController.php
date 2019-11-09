<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class signupController extends Controller
{
    public function store(Request $request){
        $username = $request->username;
        $email = $request->email;
        $pass = $request->pass;

        $status = DB::table('user')->insert(['username' => $username,'email' => $email,'password' => $pass,'user_type_code'=>'U']);
        return redirect('/login');
    }
}
