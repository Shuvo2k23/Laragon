<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function showUser(string $id){
        return  view('welcome',compact('id'));
     }
}
