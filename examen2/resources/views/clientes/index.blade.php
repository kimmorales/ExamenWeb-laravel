@extends('layouts.master')

@section('title')
Clientes
@stop

@section('content')
<h3 class="center">Clientecitos:</h3>
	<div class="panel panel-default">
		<table class="table">
		@foreach ($clientes as $cliente)
			<tr>
				<td width="70%">{{ $cliente->Nombre}}</td>
        <td><a href="{{url('/clientes',[$cliente->Cedula])}}"> Ver</a> </td>
				<td><a href="{{url('/destroyCliente',[$cliente->Cedula])}}"> Eliminar</a> </td>
			</tr>
		@endforeach
		</table>
	</div>
	<hr>
	<form action="clientes/create" method="GET">
           <h3 class="center">Agregar Cliente</h3>

           <label for="cedula">Cedula</label>
           <input class="form-control" id="cedula" name="cedula" type="text">
           <br>

           <label for="Nombre">Nombre</label>
           <input class="form-control" id="Nombre" name="Nombre" type="text">
           <br>

           <label for="Apellido">Apellido</label>
           <input class="form-control" id="Apellido" name="Apellido" type="text">
           <br>

           <label for="Nacimiento">Fecha Nacimiento (YYYY-MM-DD)</label>
           <input class="form-control" id="Nacimiento" name="Nacimiento" type="text">
           <br>

           <label for="Direccion">Direccion</label>
           <input class="form-control" id="Direccion" name="Direccion" type="text">
           <br>

           <label for="Estado">Estado Civil</label>
           <input class="form-control" id="Estado" name="Estado" type="text">
           <br>

           <label for="Sexo" >Sexo</label>
           <select name="Sexo" class="form-control" >
            <option value="M">Maculino</option>
            <option value="F">Femenuno</option>
            </select>
            <br>

           <label for="Tipo">Tipo</label>
           <select name="Tipo" class="form-control">
            <option value="Detallista">Detallista</option>
            <option value="Mayoreo">Mayoreo</option>
            </select>
            <br>

            <label for="Descuento">Descuento</label>
           <input class="form-control" id="Descuento" name="Descuento" type="text">
           <br>

           <input type="submit" class="btn btn-success">
       </form>

@stop
