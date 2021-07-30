<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        return redirect()->route('profiles.create')->with('mensagem_sucesso', 'É necessario completar o cadastro');
    }
}
