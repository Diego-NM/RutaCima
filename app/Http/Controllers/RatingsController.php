<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE

class RatingsController extends Controller
{
  public function insertRating(Request $request)
     {
        $value  =  $request['value'];
        $idTour =  $request['idTour'];
        $idUsuario =  $request->session()->get('userID');
        $fecha =  date("d/m/Y");;
        DB::insert('insert into calificacion (usuario_ID,viaje_ID,FechaHora,Valor) values (?,?,?,?)',  [$idUsuario,$idTour,$fecha,$value]);
        $response = 1;
      }
}
