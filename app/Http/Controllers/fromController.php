<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fromController extends Controller
{
    function index (){
        $members = Form::all();
        return view("welcome", compact("members"));
    }
    function create(){
        return view("pages.form");
    }
    function store(Request $request){
        $store = new Form();
        $store->name = $request->name ;
        $store->firstname = $request->firstname ;
        $store->birthDate = $request->birthDate ;
        $store->gender = $request->gender ;
        $store->save();
        // return redirect()->back();
        return redirect("/");
    }
}
