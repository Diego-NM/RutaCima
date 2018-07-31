<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE

class ViajeController extends Controller
{
    public function selectAllTours()
    {
       $result= DB::select("select * from viaje");
       $tourArray = json_decode(json_encode($result), True);
       $tour = "";
       if(isset($tourArray[1])){
          foreach($tourArray as $data){
             $tour.="<a href='/detailTour/".$data['ID_Viaje']."' class='col-md-4 blog'>
                     <div class='image'>
                       <img src='{{asset('images/chirripo.jpg')}}' alt=''>
                     </div>
                     <span></span>
                     <h3 class='title'>".$data['Titulo']."</h3>
                     <div class='date'>Fecha de Salida: ".$data['FechaHora_Salida']."</div>
                   </a>";
            }
       }else{
              $tour="<a href='/detailTour/".$data['ID_Viaje']."' class='col-md-4 blog'>
                      <div class='image'>
                        <img src='{{asset('images/chirripo.jpg')}}' alt=''>
                      </div>
                      <span></span>
                      <h3 class='title'>".$tourArray[0]['Titulo']."</h3>
                      <div class='date'>Fecha de Salida: ".$tourArray[0]['FechaHora_Salida']."</div>
                    </a>";
       }



        return $tour;
    }

    public function selectAllToursForHire()
    {
       $result= DB::select("select * from viaje");
       $tourArray = json_decode(json_encode($result), True);

      if(isset($tourArray[1])){
         foreach($tourArray as $data){
           $tour.="<option value='".$data['Titulo']."'>".$data['Titulo']."</option>";
         }
      }else{
           $tour="<option value='".$tourArray[0]['Titulo']."'>".$tourArray[0]['Titulo']."</option>";
      }


        return $tour;
    }
}
