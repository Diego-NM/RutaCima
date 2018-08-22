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
            $estado =  5;
            $fecha =  date("Y/m/d");;
            $resultBookingSpace= DB::select("select Cupo from viaje where ID_Viaje = '".$idTour."'");
            $bookingSpace = json_decode(json_encode($resultBookingSpace), True);
            if($bookingSpace[0]["Cupo"] >= $numPeople){
              $spaceLeft = $bookingSpace[0]["Cupo"] - $numPeople;
              DB::insert('insert into reservacion (usuario_ID,viaje_ID,estado_ID,Cantidad_Personas,FechaHora,CostoTotal) values (?,?,?,?,?,?)',  [$idUsuario,$idTour,$estado,$numPeople,$fecha,$totalPrice]);
              DB::update('update viaje set Cupo ='.$spaceLeft.' where ID_Viaje = '.$idTour.'');
              $response = "insertado";
            }else{
              $response = "CUPO_COMPLETO";
            }

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
