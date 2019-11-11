<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;
use Illuminate\Http\Request;

class operatorController extends Controller
{
    public function search(Request $req){
        $pass = DB::table('user') 
                                ->where([['username', '=',$req->username],
                                         ['user_type_code', '=', $req->utype]])
                                ->select('password','user_type_code')
                                ->first();
                                
        
        if($req->pass == $pass->password){
            session(['username'=>$req->username, 'type'=>$pass->user_type_code]);
            return redirect('/admin');
        }
            
        else
            return redirect(url()->previous);
    }


    public function d(){
        if(session::has('username')){
            if(session('type')==='O'){
                return view('layouts.admin');
            }
            else return redirect('/adminlogin');
        }
        else
            return redirect('/adminlogin');
    }
}
