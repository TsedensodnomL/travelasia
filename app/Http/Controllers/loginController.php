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
                                ->select('password')
                                ->first();
                                
        
        if($req->pass == $pass->password){
            session(['username'=>$req->username]);
            return redirect('/');
        }
            
        else
            return redirect(url()->previous);
    }

}
