<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsumoController extends Controller
{
    public function listar(){

        return view('insumo');

    }
}
