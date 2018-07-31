<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB; //********IMPORTANTE DEBE ESTAR EN LOS CONTROLADORES QUE USEA LA SENTENCIA DB::INSERT,DB::UPDATE,DB::SELECT,DB::DELETE
use Mail;

class ContactsController extends Controller
{
    /**
  **Send Email for contact
  **
    **/
    public function sendEmailforContact(Request $request)
    {
            $name = (string) $request['name'];
            $email = (string) $request['email'];
            $messageEmail = (string) $request['message'];

            Mail::send('pages.mail',['name'=>$name, 'email' => $email, 'messageEmail' => $messageEmail],
            function($message){
              $message->to('diegonez5@gmail.com')->subject('Consulta de Usuario');  // debe ser este rutaalacima@gmail.com
            });

            return 1;
    }
}
