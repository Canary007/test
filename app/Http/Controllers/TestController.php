<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class TestController extends Controller
{
    //
    function index(){
        return view("home");
    }
    function list(){
        return Restaurant::all();
        return view("list", ["data"=>$data]);
    }
}
