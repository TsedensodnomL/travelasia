<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function d(){
        return view('layouts.superior');
    }

    public function 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('user')->get();
        return view('workerlist',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = DB::table('user')
                                ->insert(['username'=>$request->username, 'password'=>$request->pass,
                                           'firstname'=>$request->fname, 'lastname'=>$request->lname,
                                           'email'=>$request->email, 'phone'=>$request->phone,
                                           'birthdate'=>$request->bdate, 'user_type_code'=>$request->utype,
                                           'gender'=>$request->gender]);
        return redirect(route('worker.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('user')->where('username',$id)->first();
        //echo $user->username;
        return view('workershow',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('user')->where('username',$id)->first();
        //echo $user->username;
        return view('workeredit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status = DB::table('user')->where('username',$request->username)
                                   ->update(['password'=>$request->pass, 'firstname'=>$request->fname,
                                             'lastname'=>$request->lname, 'email'=>$request->email,
                                             'birthdate'=>$request->bdate, 'phone'=>$request->phone,
                                             'gender'=>$request->gender]);
        return redirect(route('worker.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "delete";
        // $status = DB::table('user')->where('username',$id)->delete();
        // return redirect(route('worker.index'));
    }
}
