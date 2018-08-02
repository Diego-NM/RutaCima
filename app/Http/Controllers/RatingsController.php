<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE

class RatingsController extends Controller
{
  public function insertRating(Request $request)
     {  $response = "";
        $idUsuario =  $request->session()->get('userID');
        if($idUsuario === NULL){
            $response = "error";
          }else{
            $value  =  $request['value'];
            $idTour =  $request['idTour'];
            $fecha =  date("Y/m/d");;
            DB::insert('insert into calificacion (usuario_ID,viaje_ID,FechaHora,Valor) values (?,?,?,?)',  [$idUsuario,$idTour,$fecha,$value]);
            $response = "insertado";
          }
         return $response;
      }
}
