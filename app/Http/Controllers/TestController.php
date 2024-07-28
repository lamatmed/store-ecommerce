<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function method1($userName){
        return 'Bonjour   '.$userName;
    }
    public function exemple(){
        return 'Ceci est un exemple';
    }
    public function accueil(){
        $userName='Lamat';
        return view('accueil',['name' => $userName, 'age' => 34 ]);
     }
}
