<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE

class ProductsController extends Controller
{
      public function selectAllProducts()
      {
            $result= DB::select("select * from producto");
            $productArray = json_decode(json_encode($result), True);
            $product = "";

            if(isset($productArray[1])){
              foreach($productArray as $data){
              $product.="<a href='/detailProduct/".$data['ID_Producto']."' class='col-md-4 blog'>
                         <div class='image'>
                           <img src='{{asset('images/chirripo.jpg')}}' alt=''>
                         </div>
                         <span></span>
                         <h3 class='title'>".$data['Nombre']."</h3>
                         <div class='date'>Descripción: ".$data['Descripcion']."</div>
                       </a>";
              }
            }else{
              //No lo recorro por que se que solo hay un registro, si fueran mas se hace con foreach()
               $product="<a href='/detailProduct/".$data['ID_Producto']."' class='col-md-4 blog'>
                       <div class='image'>
                         <img src='{{asset('images/chirripo.jpg')}}' alt=''>
                       </div>
                       <span></span>
                       <h3 class='title'>".$productArray[0]['Nombre']."</h3>
                       <div class='date'>Descripción: ".$productArray[0]['Descripcion']."</div>
                     </a>";
            }



             return $product;
       }
}
