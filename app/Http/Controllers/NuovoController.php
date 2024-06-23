<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuovoController extends Controller
{
    public static    $servizi = [
        ['name' => 'Siti Web', 'uri' => 'siti-web', 'costo' => 3500,],
        ['name' => 'Negozi Digitali', 'uri' => 'ecommerce','costo'=> 2500],
        ['name' => 'Gestionali in Cloud', 'uri' => 'gestionali-cloud','costo'=> 1500],
        ['name' => 'Marketing Digitale', 'uri' => 'marketing-digitale','costo'=> 3000],
    ];

    public function welcome(){
            return view('welcome');
    }

    public  function homepage (){
        return view('homepage');
    }

    public function ChiSono(){
        return view('ChiSono');
    }

    public  function servizi(){

      return view('ServiziOfferti', ['array'=>self::$servizi] );
    }

    public function dettagli($servizi){

        foreach (self::$servizi as $element) {
            if ( $servizi== $element['uri']) {
                return view('details', ['services' => $element]);
            }
        }

        abort(404);

    }

    public  function contatti(){

        return view('contact');
      }
    }

