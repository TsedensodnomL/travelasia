<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class travelController extends Controller
{
    public function index(){
        return view('');
    }

    public function create(){
        $category = DB::table('category')->get();
        $location = DB::table('location')->get();
        return view('travelcreate', ['cat'=>$category,'loc'=>$location]);
    
    }

    public function store(Request $req){
        $status = DB::table('travel')->insert(
            ['id' => $req->id, 'name' => $req->name, 'description' => $req->description,
            'price' => $req->price, 'start' => $req->start, 'end' => $req->end, 'category_id'=>$req->category, 'location_id'=>$req->location]
        );
        return redirect('admin/travel/show');
    }   

    public function show(){
        $travel = DB::table('travel')
                                    ->join('category', 'travel.category_id', '=','category.id')
                                    ->join('location', 'travel.location_id', '=','location.id')
                                    ->select('travel.*','category.category','location.location')
                                    ->get();
        return view('travelshow', ['travel'=>$travel]);
    }

    public function edit($id){
        $travel = DB::table('travel')
                                    ->find($id);
        $cat = DB::table('category')->get();
        $loc = DB::table('location')->get();

        //echo $travel->category_id;
        return view('traveledit',['travel'=>$travel, 'cat'=>$cat, 'loc'=>$loc]);
    }

    public function update(Request $req, $id){
        $status = DB::table('travel')
                                    ->where('id','=',$id)
                                    ->update(['name'=>$req->name, 'id'=>$req->id, 'description'=>$req->description, 'price'=>$req->price, 'start'=>$req->start, 'end'=>$req->end, 
                                    'category_id'=>$req->category , 'location_id'=>$req->location]);
        
        return redirect('admin/travel/show');
    }

    public function delete($id){
        $status = DB::table('travel')
                                    ->where('id','=',$id)
                                    ->delete();
                                    echo $status;
        return redirect('admin/travel/show');
    }


    public function travel(Request $req){
        $id = $req->route('id');
        $travel = DB::select('select id, name, price, category_id, dateDiff(end, start) as dat from travel');
        
        return view('water', ['travel'=>$travel, 'id'=>$id]);
    }

    public function travelmore(Request $req){
        $id = $req->route('tid');
        $travel = DB::select('SELECT travel.*, location.description as des from travel join location on travel.location_id = location.id where travel.id = ?',[$id]);
        return view('baikal', ['travel'=>$travel, 'id'=>$id]);
    }

}
