<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE


class BookingsController extends Controller
{
  public function insertBooking(Request $request)
     {  $response = "";
        $idUsuario =  $request->session()->get('userID');
        if($idUsuario === NULL){
            $response = "error";
          }else{
            $numPeople  =  $request['numPeople'];
            $price =  $request['price'];
            $totalPrice = str_replace(",","",$price);
            $idTour =  $request['idTour'];
            $estado =  1;
            $fecha =  date("Y/m/d");;
            DB::insert('insert into reservacion (usuario_ID,viaje_ID,estadoRC_ID,Cantidad_Personas,FechaHora,CostoTotal) values (?,?,?,?,?,?)',  [$idUsuario,$idTour,$estado,$numPeople,$fecha,$totalPrice]);
            $response = "insertado";
          }
         return $response;
      }

      public function calculatePrice(Request $request)
         {
             $priceSelectedTour = $request['price'];
             $numPeople  =  $request['numPeople'];
             $response = $numPeople * $priceSelectedTour;
             return number_format($response);
          }
}
