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
            if(!empty($productArray)){
                  if(isset($productArray[1])){
                    foreach($productArray as $data){
                    $product.="<a href='/detailProduct/".$data['ID_Producto']."' class='col-md-4 blog'>
                               <div class='image'>
                                 <img src='http://localhost/Admin-RC/public/images/".$data['Ruta_Imagen']."' alt='' style='width: 250px;height: 250px;'>
                               </div>
                               <span></span>
                               <h2 class='title'>".$data['Nombre']."</h2>
                               <div class='date' style='font-size: large;'>Descripción: ".$data['Descripcion']."</div>
                             </a>";
                    }
                  }else{
                    //No lo recorro por que se que solo hay un registro, si fueran mas se hace con foreach() src={{url('images/'.$array['array'][0]['Ruta_Imagen'])}}
                     $product="<a href='/detailProduct/".$productArray[0]['ID_Producto']."' class='col-md-4 blog'>
                             <div class='image'>
                               <img src='http://localhost/Admin-RC/public/images/".$productArray[0]['Ruta_Imagen']."' alt='' style='width: 250px;height: 250px;'>
                             </div>
                             <span></span>
                             <h2 class='title'>".$productArray[0]['Nombre']."</h2>
                             <div class='date' style='font-size: large;'>Descripción: ".$productArray[0]['Descripcion']."</div>
                           </a>";
                  }
                  return $product;
            }else{
                  return "VACIO";
            }

       }
}
