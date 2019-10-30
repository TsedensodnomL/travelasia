<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class locationController extends Controller
{
    public function index(){
        return view('');
    }

    public function create(){
        return view('locationcreate');
    
    }

    public function store(Request $req){
        $status = DB::table('location')->insertGetId(
            ['location' => $req->location, 'description' => $req->description]
        );
        return redirect('admin/location/show');
    }   

    public function show(){
        $location = DB::table('location')->get();
        return view('locationshow', ['location'=>$location]);
    }

    public function edit($id){
        $location = DB::table('location')->find($id);
        return view('locationedit',['location'=>$location]);
    }

    public function update(Request $req, $id){
        $status = DB::table('location')
                                    ->where('id','=',$id)
                                    ->update(['location'=>$req->location, 'id'=>$req->id, 'description'=>$req->description]);
        
        return redirect('admin/location/show');
    }

    public function delete($id){
        $status = DB::table('location')
                                    ->where('id','=',$id)
                                    ->delete();
                                    echo $status;
        return redirect('admin/location/show');
    }

}
