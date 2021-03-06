@extends('layouts.base')
@section('content')
<br>
<br>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <img src="/images/celular.png" width="100" height="100" >
    </div>
    <div class="col-lg-7 col-md-4 col-sm-6 col-xs-12">
        <h1 class="text-center">Bienvenido al sistema de inventario..!</h1>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
       <a href="/index" class="btn btn-success">Salir</a>
    </div>
</div>
<br>
<div class="container">
    <div class="justify-content-center">
    <div class="row">
            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 p-3 mb-2 bg-info text-white text-center">
                <h3>Lista de Empleados del Sistema..!</h3>
             </div>
        </div>
         <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 text-right">
              <a href="/vendedores"class="btn btn-secondary">Regresar</a>
        </div>
        <br>
        <br>
        <div class="row">
             <div class="col">
                 <table class="table table-bordered table-striped">
                     <thead>
                         <th>Id</th>
                         <th>Nombre</th>
                         <th>Apellido</th>
                         <th>Tipo Documento</th>
                         <th>N° Documento</th>
                         <th>Correo</th>
                         <th>Usuario</th>
                         <th>Contraseña</th>
                         <th>Editar</th>
                         <th>Eliminar</th>
                     </thead>
                     <tbody>
                         @foreach ($vendedores as $vendedore)
                         <tr>
                             <td>{{$vendedore->id}}</td>
                             <td>{{$vendedore->nombre}}</td>
                             <td>{{$vendedore->apellido}}</td>
                             <td>{{$vendedore->tipo_documento}}</td>
                             <td>{{$vendedore->numero_documento}}</td>
                             <td>{{$vendedore->correo}}</td>
                             <td>{{$vendedore->usaurio}}</td>
                             <td>{{$vendedore->contrasena}}</td>
                             <td>
                                <a class="btn btn-success" href="/vendedores/{{$vendedore->id}}/edit">Editar</a>
                             </td>
                             <td>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
                </table>
            </div>
        </div>
@endsection