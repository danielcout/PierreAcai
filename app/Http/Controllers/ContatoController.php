<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() 
    {
        var_dump($_POST);
        return view('contato', ['titulo' => 'Contato(teste)']);
    }
}