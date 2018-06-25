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
    public function createUser(Request $request)
    {
      $firstName = $request['firstName'];
      $firstLastName = $request['firstLastName'];
      $secondLastName = $request['secondLastName'];
      $idNumber = $request['idNumber'];
      $age = $request['age'];
      $email = $request['email'];
      $telephone = $request['telephone'];
      $userName = $request['userName'];
      $password = $request['password'];
      $rolID = 'externo';

      DB::insert('insert into usuario (NombreCompleto,PrimerApellido,SegundoApellido,NumeroIdentificacion,Edad,CorreoElectronico,NumeroTelefonico,NombreUsuario,Contrasena,rol_ID) values (?,?,?,?,?,?,?,?,?,?)',  [$firstName, $firstLastName,$secondLastName,$idNumber,$age,$email,$telephone,$userName,$password,$rolID]);
    }

    public function editUser($name, $email, $phone)
    {

    }

    public function deleteUser($name, $email, $phone)
    {

    }
}
