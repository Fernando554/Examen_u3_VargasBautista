<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publicaciones;

class publicacionController extends Controller
{
public function index()
{

    //poder hacer la correctamente la ruta en web.php
    return view('index');
}
public function about()
{
    return view('about');
}
public function contact()
{
    return view('contact');
}
public function registro()
{
    return view('registro');
}
public function index2()
{
    return view('index2');
}
public function curso1()
{
    $publicacion = publicaciones::find(1);
    $Nombre = $publicacion->nombre;
    $contenido = $publicacion->contenido;
    return view('curso1',['Nombre' => $Nombre, 'contenido' => $contenido]);
}
public function T_cursos($id){
$publicacion = publicaciones::find($id);
$Nombre = $publicacion->nombre;
$contenido = $publicacion->contenido;
return view('curso1',['Nombre' => $Nombre, 'contenido' => $contenido]);
}
}

