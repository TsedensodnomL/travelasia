<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class categoryController extends Controller
{
    public function index(){
        return view('');
    }

    public function create(){
        return view('categorycreate');
    
    }

    public function store(Request $req){
        
        $fileog;
        
        if($req->hasFile('image')){
            
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $fileog = $filename;
        }
        else{
        
            $fileog = '';
        }
        

        $status = DB::table('category')->insertGetId(
            ['category' => $req->category, 'photo' => $fileog]
        );
        return redirect('admin/category/show');
    }   

    public function show(){
        $category = DB::table('category')->get();
        return view('categoryshow', ['category'=>$category]);
    }

    public function edit($id){
        $category = DB::table('category')->find($id);
        return view('categoryedit',['category'=>$category]);
    }

    public function update(Request $req, $id){
        $status = DB::table('category')
                                    ->where('id','=',$id)
                                    ->update(['category'=>$req->category, 'id'=>$req->id]);
        
        return redirect('admin/category/show');
    }

    public function delete($id){
        $status = DB::table('category')
                                    ->where('id','=',$id)
                                    ->delete();
                                    echo $status;
        return redirect('admin/category/show');
    }

}
