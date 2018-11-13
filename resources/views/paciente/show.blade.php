@extends('layouts.app')
@section('title',$paciente->name)
@section('content')
    <h1>{{ $paciente->name }}</h1>    
    <strong>Datos del paciente</strong>    
    <p>Edad: {{ $paciente->age }}<br>
    Dirección: {{ $paciente->address }}<br>
    Código de paciente: {{ $paciente->barcode }}</p>
    <a href="{{ url()->previous() }}"><button style="margin-right:6px" type="button" class="btn btn-info btn-sm float-left">Volver</button></a>

    <a style="margin-right:6px" href="{{ route('pacientes.edit',$paciente->id) }}" class="btn btn-primary btn-sm float-left">Editar</a>
    <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
		<input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
	</form>
@endsection