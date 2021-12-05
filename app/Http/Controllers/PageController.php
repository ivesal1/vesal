<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
       $names =[
           ['firstName' =>'mahdi', 'lastName'=>'jafari'],
           ['firstName'=>'pooya', 'lastName'=>'karimi'],
           ['firstName'=>'mehdi', 'lastName'=>'khodadadi']
       ];
       return view( 'vesal',compact('names'));
    }
    public function index2() {
        return view('welcome');
    }
};

