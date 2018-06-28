<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE

class UsersController extends Controller
{
  /**
**Create User
**
  **/

    public function validateUser(Request $request)
    {
      $email = $request['email'];
      $password = $request['password'];

      $result= DB::select("select ID_Usuario from usuario where CorreoElectronico='".$email."'");
      $array = json_decode(json_encode($result), True);
      if(!empty($array)){
        $response = 1;
      }else{
        $response = 0;
      }
      return $response;
    }


    public function createUser(Request $request)
    {
        $firstName = $request['name'];
        $firstLastName = $request['firstLastName'];
        $secondLastName = $request['secondLastName'];
        $idNumber = $request['idNumber'];
        $age = $request['age'];
        $email = $request['email'];
        $telephone = $request['telephone'];
        $userName = $request['userName'];
        $password = $request['password'];
        $rolID = $request['rol'];

        $result= DB::select('select * from usuario where NumeroIdentificacion='.$idNumber);
        $array = json_decode(json_encode($result), True);
          if(!empty($array)){
            $response = "existe";
          }else{
            DB::insert('insert into usuario (NombreCompleto,PrimerApellido,SegundoApellido,NumeroIdentificacion,Edad,CorreoElectronico,NumeroTelefonico,NombreUsuario,Contrasena,rol_ID) values (?,?,?,?,?,?,?,?,?,?)',  [$firstName, $firstLastName,$secondLastName,$idNumber,$age,$email,$telephone,$userName,$password,$rolID]);
            $response = "no existe";
          }
     return $response;
    }

    public function editUser($name, $email, $phone)
    {

    }

    public function deleteUser($name, $email, $phone)
    {

    }

}
