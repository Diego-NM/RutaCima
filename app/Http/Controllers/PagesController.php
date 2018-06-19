<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
       return view('pages.main');
    }

    public function menu(){
       return view('pages.menu');
    }
}