<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $cliente=Cliente::all();
        foreach ($cliente as $c) {
            echo "$c->nome";
            echo "$c->email";
            echo "$c->senha";
        }
    }
    public function indexAPI(){
        $cliente=Cliente::all();
        return $cliente;
    }
}
