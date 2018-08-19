<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE

class ViajeController extends Controller
{
    public function selectAllTours()
    {
       $result= DB::select("select * from viaje where estadoViaje_ID = 2");
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

    public function selectFilterAllTours(Request $request){
        $filtro  =  $request['filtro'];
          $resultTodos= DB::select("select * from viaje v, estado_viaje e where v.estadoViaje_ID=e.ID_Estado_Viaje and v.estadoViaje_ID = 2 ");
          $tourArray = json_decode(json_encode($resultTodos), True);
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

    public function selectFilterToursBetterRating(Request $request){
        $filtro  =  $request['filtro'];
          $maxResult= DB::select("select max(c.Valor) cantidad from viaje v, calificacion  c where c.viaje_ID=v.ID_Viaje");
          $max = json_decode(json_encode($maxResult), True);
          $resultMejorCalificados= DB::select("select * from viaje v, calificacion c where c.viaje_ID = v.ID_Viaje and c.Valor ='".$max[0]['cantidad']."'");
          $tourArray = json_decode(json_encode($resultMejorCalificados), True);
          $tour = "";
            if(!empty($tourArray)){
                    if(isset($tourArray[1])){
                       foreach($tourArray as $data){
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
                    }else{
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

    public function selectFilterToursMoreBooking(Request $request){
        $filtro  =  $request['filtro'];
        $maxResult = DB::select("select max(r.Cantidad_Personas) cantidad from viaje v, reservacion r where r.viaje_ID=v.ID_Viaje");
        $max = json_decode(json_encode($maxResult), True);
        $resultMasReservados= DB::select("select * from viaje v, reservacion r where r.viaje_ID = v.ID_Viaje and r.Cantidad_Personas ='".$max[0]['cantidad']."'");
        $tourArray = json_decode(json_encode($resultMasReservados), True);
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

    public function selectFilterToursNacionals(Request $request){
        $filtro  =  $request['filtro'];
        $resultNacionales= DB::select("select * from viaje where tipo_viaje_ID = 1 and estadoViaje_ID = 2");
        $tourArray = json_decode(json_encode($resultNacionales), True);
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

    public function selectFilterToursInternacionals(Request $request){
        $filtro  =  $request['filtro'];
        $resultInternacionales= DB::select("select * from viaje where tipo_viaje_ID = 2 and estadoViaje_ID = 2");
        $tourArray = json_decode(json_encode($resultInternacionales), True);
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
}
