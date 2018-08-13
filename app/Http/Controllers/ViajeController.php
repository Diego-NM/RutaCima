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
         if(!empty($tourArray)){
                 if(isset($tourArray[1])){
                    foreach($tourArray as $data){//" ".$data['Ruta_Imagen' "
                       $time = strtotime($data['FechaHora_Salida']);
                       $tour.="<a href='/detailTour/".$data['ID_Viaje']."' class='col-md-4 blog'>
                               <div class='image'>
                                 <img src='http://localhost/Admin-RC/public/images/".$data['Ruta_Imagen']."' alt'' style='width: 250px;height: 250px;'>
                               </div>
                               <span></span>
                               <h2 class='title'>".$data['Titulo']."</h2>
                               <div class='date' style='font-size: large;'>Fecha de Salida: ".date('d/m/y',$time)."</div>
                             </a>";
                      }
                 }else{//src={{url('images/'.$array['array'][0]['Ruta_Imagen'])}}
                        $time = strtotime($tourArray[0]['FechaHora_Salida']);
                        $tour="<a href='/detailTour/".$tourArray[0]['ID_Viaje']."' class='col-md-4 blog'>
                                <div class='image'>
                                   <img src='http://localhost/Admin-RC/public/images/".$tourArray[0]['Ruta_Imagen']."' alt'' style='width: 250px;height: 250px;'>
                                </div>
                                <span></span>
                                <h2 class='title'>".$tourArray[0]['Titulo']."</h2>
                                <div class='date' style='font-size: large;'>Fecha de Salida: ".date('d/m/y',$time)."</div>
                              </a>";
                 }
          return $tour;
         }else{
          return "VACIO";
         }
    }


    public function selectAllToursForHire()
    {
       $result= DB::select("select * from viaje");
       $tourArray = json_decode(json_encode($result), True);
       $tour= "";
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
