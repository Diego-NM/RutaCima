<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE


class HiringController extends Controller
{
  public function createHiring(Request $request)
  {
      $contratacion = $request['contratacion'];
      $cantidadPersonas = $request['cantidadPersonas'];
      $fechaEventoI = $request['fechaEvento'];
      
      //Date Conversion
      $convertDate =date('Y-m-d h:m:s', strtotime(str_replace('/','-',$fechaEventoI)));
      $fechaEvento = $convertDate;
        //Date Conversion

      $tipoEvento = $request['tipoEvento'];
      $descripcion = $request['extra'];
      $tipoServicio = $request['tipoServicio'];
      $userID = $request->session()->get('userID');
      $estado = 5;
      $fechaTramite = date("d/m/Y");
      $costoTotal = 0;
        DB::insert('insert into contratacion (usuario_ID,estado_ID,tipoEvento_ID,tipoServicioID,Descripcion,FechaTramite,FechaServicio,Costo_Total)
        values (?,?,?,?,?,?,?,?)',[$userID,$estado,$tipoEvento,$tipoServicio,$contratacion.", ".$descripcion,$fechaTramite,$fechaEvento,$costoTotal]);
        $response = 1;

      return $response;
  }

}
