<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE

class PagesController extends Controller
{
    public function index(){
       return view('pages.main');
    }

    public function login(){
       return view('pages.login');
    }

    public function indexAfterLogin(){
       return view('pages.mainAfterLogin');
    }

    public function hiring(){
       return view('pages.hiring');
    }

    public function detailTourPage($id){
      $result= DB::select("select * from viaje where ID_Viaje ='".$id."' "); // Show Tour
      $resultComments= DB::select("select c.Mensaje,c.Fecha,u.NombreUsuario from comunicacion c, usuario u where u.ID_Usuario = c.usuario_ID ORDER BY c.Fecha DESC LIMIT 5"); //Show Comments of tour
      $tour = json_decode(json_encode($result), True);
      $resultCom = json_decode(json_encode($resultComments), True);
      $data = array (
        'tour' => $tour,
        'comment' => $resultCom
      );
      return view('pages.detailTour')->with($data);
    }

    public function detailProductPage($id){
      $result= DB::select("select * from producto where ID_Producto ='".$id."' ");
      $product = json_decode(json_encode($result), True);
      $data = array (
        'product' => $product
        );
       return view('pages.detailProduct')->with($data);
    }

    public function validacionInicioSesion(){
       return view('pages.validacionInicioSesion');
    }

    public function restorePassword(){
       return view('pages.restorePassword');
    }

}
