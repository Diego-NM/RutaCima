<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE



class CommentsController extends Controller
{
    public function saveNewComments(Request $request){
         $response = "";
         $idUsuario =  $request->session()->get('userID');
         if($idUsuario === NULL){
             $response = "error";
           }else{
             $mensaje  =  $request['mensaje'];
             $idTour =  $request['idTour'];
             $fecha =  date("Y/m/d");;
             DB::insert('insert into comunicacion (usuario_ID,ID_viaje,mensaje,Fecha) values (?,?,?,?)',  [$idUsuario,$idTour,$mensaje,$fecha]);
             $response = "insertado";
           }
          return $response;
    }

    public function loadComment(Request $request){
      $result= DB::select("select c.Mensaje,c.Fecha,u.NombreUsuario from comunicacion c, usuario u where u.ID_Usuario = c.usuario_ID ORDER BY c.Fecha DESC LIMIT 5"); //Show Comments of tour
      $resultComments = json_decode(json_encode($result), True);
      $comments = "";
      foreach($resultComments as $item){
        $comments .= "<li><a '#'><h4 class='title'>".$item['Mensaje']."</h4><span>".date('Y-m-d',strtotime($item['Fecha']))."</span><br/><span>".$item['NombreUsuario']."</span></a>";
      }
      return $comments;
    }
}
