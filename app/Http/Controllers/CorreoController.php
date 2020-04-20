<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Mail;
class CorreoController extends Controller
{
   public function contact(Request $request){
        $subject = "Hola";
        $for = "jjdeveloperswdm@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("juanjesuspadrondiaz@gmail.com","juanito");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
    
    
        
}
