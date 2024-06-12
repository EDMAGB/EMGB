@extends('plantillas.layouts')
@section('titulo', 'Panel de control Admin')
@section('contenido')
<div class="tituloprincipal">
    <p class="textitulo"> Usuarios
    <p>
</div>
<br>
<div class="divnegro">
<p class="textdivnegro"> Tipo de usuario: </p>
</div>
<br>
<div class="cjatbl">
    <div class="card">
        <div class="card-body">
            <div style="overflow-x: auto;">
                <table id="dataTableDD">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Equipo</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                 
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection