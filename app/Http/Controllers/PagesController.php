<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
       return view('pages.main');
    }

    public function indexAdmin(){
       return view('admin.main');
    }

    public function detailTourPage(){
       return view('pages.detailTour');
    }

}
