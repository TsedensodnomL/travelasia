<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class loginController extends Controller
{
    
    public function search(Request $req){
        $pass = DB::table('user') 
                                ->where('username', $req->username)
                                ->select('password','user_type_code')
                                ->first();
                                
        
        if($req->pass == $pass->password){
            session(['username'=>$req->username, 'type'=>$pass->user_type_code]);
            return redirect('/');
        }
            
        else
            return redirect(url()->previous);
    }

}
