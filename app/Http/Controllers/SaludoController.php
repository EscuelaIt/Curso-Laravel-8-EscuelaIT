<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludar()
    {
        $x = 0;
        $saludo = 'hola';
        return "Hola Mundo";
    }
}
