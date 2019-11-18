<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index(){
        return view('');
    }

    public function create(){
        $travel = DB::table('travel')->get();
        
        return view('ordercreate', ['travel'=>$travel]);
    
    }

    public function store(Request $req){
        $status = DB::table('orders')->insert(
            ['id' => $req->id, 'user_username' => $req->name, 'travel_id' => $req->travel,
            'traveler_number' => $req->count]
        );
        return redirect('admin/travel/show');
    }   

    public function show(){
        $travel = DB::table('orders')
                                    ->join('travel', 'orders.travel_id','=','travel.id')
            
                                    ->select('orders.*','travel.id' ,'travel.name')
                                    ->get();
        return view('ordershow', ['travel'=>$travel]);
    }

    public function edit($id){
        $travel = DB::table('orders')
                                    ->where('orders.id', $id)
                                    ->join('travel', 'orders.travel_id','=','travel.id')
                                    ->select('orders.*', 'travel.name')
                                    ->first();

        //echo $travel->category_id;
        return view('orderedit',['travel'=>$travel]);
    }

    public function update(Request $req, $id){
        $status = DB::table('orders')
                                    ->where('orders.id','=',$id)
                                    ->update(['traveler_number'=>$req->count]);
        
        return redirect('admin/order/show');
    }

    public function delete($id){
        $status = DB::table('orders')
                                    ->where('id','=',$id)
                                    ->delete();
                                    echo $status;
        return redirect('admin/order/show');
    }

    public function lista($id){
        $travel = DB::table('orders')
                                    ->join('travel', 'orders.travel_id','=','travel.id')
                                    ->where('travel.id', $id)
                                    ->select('orders.*','travel.id' ,'travel.name')
                                    ->get();
        return view('orderlist', ['travel'=>$travel]);
    }

}
