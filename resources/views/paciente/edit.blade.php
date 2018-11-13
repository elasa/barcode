@extends('layouts.app')
@section('title','Nuevo Paciente')
@section('content')
        <h2>Registro de Paciente</h2>
        <form action="{{ route('pacientes.update', $paciente->id ) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Ingrese nombre" value="{{ $paciente->name }}">
            </div>
            <div class="form-group">
                <input type="text" name="age" class="form-control" placeholder="Ingrese edad" value="{{ $paciente->age }}">
            </div>
            <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Ingrese dirección" value="{{ $paciente->address }}">
            </div>
            <div class="form-group">
                <input type="text" name="barcode" class="form-control" placeholder="Ingrese codigo de barra" value="{{ $paciente->barcode }}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
            <a href="{{ route('pacientes.index')}}"><button type="button" class="btn btn-danger btn-sm">Cancelar</button></a>
        </form>
@endsection