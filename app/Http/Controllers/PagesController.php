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
      $result= DB::select("select * from viaje where ID_Viaje ='".$id."' ");
      $tour = json_decode(json_encode($result), True);
      $dateLeaving = strtotime($tour[0]['FechaHora_Salida']);
      $dateComming = strtotime($tour[0]['FechaHora_Regreso']);
      $data = array (
        'tour' => $tour,
        'fechaSalida'=>date('d/m/y H:i:s',$dateLeaving),
        'fechaLlegada'=>date('d/m/y H:i:s',$dateComming),
      );
       return view('pages.detailTour')->with($data);
    }

    public function detailProductPage($id){
      $result= DB::select("select * from producto where ID_Producto ='".$id."' ");
      $product = json_decode(json_encode($result), True);
      $data = array (
        'product' => $product
        );
       return view('pages.detailProduct')->with($data);;
    }

    public function validacionInicioSesion(){
       return view('pages.validacionInicioSesion');
    }

}
