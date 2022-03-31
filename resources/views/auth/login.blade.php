@extends('template.layout_registro')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.5.1/tailwind.min.css">
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3x1 text-center font-bold">Inicio Sesion</h1>

    <form class="mt-4"  method="POST" action="">
        @csrf

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Usuario"
        id="name"name="name">

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password"
        id="password"name="password">

        @error('message')

        <p class="border border-red-500 rounded-md bg-red-100 w-full
        text-red-600 p-2 my-2">* Error</p>

        @enderror

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600">Enviar</button>


    </form>
</div>
@endsection
