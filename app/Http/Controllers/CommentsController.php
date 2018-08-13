<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE



class CommentsController extends Controller
{
    public function showCommentsForTour(Request $request){
      $result= DB::select("select * from comunicacion LIMIT 5");
      $comments = json_decode(json_encode($result), True);

      $data = array (
        'comment' => $tour,
      );
       return view('pages.detailTour')->with($data);
    }
}
