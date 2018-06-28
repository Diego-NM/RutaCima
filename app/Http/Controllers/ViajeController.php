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

      //No lo recorro por que se que solo hay un registro, si fueran mas se hace con foreach()
       $tour="<a href='/detailTour' class='col-md-4 blog'>
               <div class='image'>
                 <img src='{{asset('images/chirripo.jpg')}}' alt=''>
               </div>
               <span></span>
               <h3 class='title'>".$tourArray[0]['Titulo']."</h3>
               <div class='date'>Fecha de Salida: ".$tourArray[0]['FechaHora_Salida']."</div>
             </a>";

        return $tour;
    }
}
