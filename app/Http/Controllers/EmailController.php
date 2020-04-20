<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class EmailController extends Controller
{
  
    public function contact(Request $request){
        /*MENSAJE PARA NOSOTROS*/
        $subject = $request['categoria'];
        $for = "serviclientedev@jjdeveloperswdm.com";
        Mail::send('/principal/email_enviado',$request->all(), function($msj) use($subject,$for){
            $msj->from("serviclientedev@jjdeveloperswdm.com","JDev-S");
            $msj->subject($subject);
            $msj->to($for);
        });
        
        /*MENSAJE PARA ELLOS*/
        $subject = $request['categoria'];
        $for = $request['email'];
        Mail::send('/principal/email_recibido',$request->all(), function($msj) use($subject,$for){
            $msj->from("serviclientedev@jjdeveloperswdm.com","JDev-S");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}
 