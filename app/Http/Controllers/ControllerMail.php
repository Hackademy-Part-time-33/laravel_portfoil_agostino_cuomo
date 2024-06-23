<?php 
namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ControllerMail extends Controller{
    public function ShowMail(Request $request){
        
    $contact= $request->all();
    Mail::to('proprietario@gmail.com')->send(new InfoMail($contact));
     
    return redirect("home");
    }
}
