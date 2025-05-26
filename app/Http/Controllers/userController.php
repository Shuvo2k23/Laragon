<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function getUsers(){
        // $users = DB::table('users')->get();
        $users = DB::table('users')->paginate(4);
        return view('getUsers',['data'=>$users]);
    }
    public function byId(string $id){
        $user = DB::table('users')->where('id',$id)->get();
        return view('userById',['data' =>$user]);
    }
    public function delById(string $id){
        $user = DB::table('users')->where('id',$id)->delete();
        return redirect()->route('home');
    }
    public function addUser(Request $req){
        $user = DB::table('users')
                ->insert([
                    'name'=>$req->username,
                    'email' => $req->useremail,
                    'age' =>$req->age,
                    'city' =>$req->city 
                ]);

        return redirect()->route('home');
    }
    public function updateUser(string $id){
         $user = DB::table('users')->find($id);
         return view('update',['data'=>$user]);
    }
    public function update(Request $req, $id){
        $user = DB::table('users')
                ->where('id',$id)
                ->update([
                    'name'=>$req->username,
                    'email' => $req->useremail,
                    'age' =>$req->age,
                    'city' =>$req->city 
                ]);
        return redirect()->route('home'); 
    }
}
