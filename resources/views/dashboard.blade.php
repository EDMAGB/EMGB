{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('plantillas.layouts')
@section('titulo', 'Panel de control Admin')
@section('contenido')
<br>
<div class="tituloprincipal">
    <p class="textitulo"> Panel de Control
    <p>
</div>
<br>
<div class="row">
    <div class="col-md-4 div1">
        <h3 class="titulocard1">Colaboradores</h3>
        <p class="textcard1">50</p>
    </div>
    <div class="col-md-4 div2">
        <h3 class="titulocard2"> Proyectos</h3>
        <p class="textcard2">20</p>
    </div>
    <div class="col-md-4 div3">
        <h3 class="titulocard3"> Demo Day</h3>
        <p class="textcard3">04/ 08 / 2024</p>
        <p class="textcard3">Demo Day 1</p>
    </div>
</div>


@endsection