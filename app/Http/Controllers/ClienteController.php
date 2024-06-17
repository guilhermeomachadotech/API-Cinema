<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

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

    public function storeApi(Request $request){
        $cliente = new Cliente();

        $cliente->nome =$request->nome;
        $cliente->email =$request->email;
        $cliente->senha = $request->senha;

        $cliente->save(); //Salva a inserção no banco
    }
}
