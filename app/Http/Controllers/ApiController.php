<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
/**
 *Funciond de ApiNacion
 *
 *@return Probabilidad de Nacion
 */

    public function submit(Request $datos){
        $Nombre =$datos->name;

        //consumir el api de saber tu nacionalidad
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.nationalize.io?name='.$Nombre);
        $datos = json_decode($response->getBody()->getContents(), true);

        //recorrer los elementos de la api
        $resultado = [];

        foreach($datos['country'] as $nacion){
            $resultado[] =[
                'id' =>$nacion['country_id'],
                'probabilidad' =>$nacion['probability']
            ];
        }
        return view('index2', ['resultado'=>$resultado]);
    }
    public function index2(){
        $resultado=[];
        $resultado[] =[
            'id' =>' ',
            'probabilidad' =>' '
        ];
        return view('index2', ['resultado'=>$resultado]);
    }
    }
