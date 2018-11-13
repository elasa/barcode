@extends('layouts.app')
@section('title','Nuevo Paciente')
@section('content')
        <h2>Registro de Paciente</h2>
        <form action="{{ route('pacientes.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="name" class="form-control form-control-sm" placeholder="Ingrese nombre" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <input type="text" name="age" class="form-control form-control-sm" placeholder="Ingrese edad" value="{{ old('age') }}">
            </div>
            <div class="form-group">
                <input type="text" name="address" class="form-control form-control-sm" placeholder="Ingrese dirección" value="{{ old('address') }}">
            </div>
            <div class="form-group">
                <input type="text" name="barcode" class="form-control form-control-sm" placeholder="Ingrese codigo de barra" value="{{ old('address') }}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
            <a href="{{ route('pacientes.index')}}"><button type="button" class="btn btn-danger btn-sm">Cancelar</button></a>
        </form>
@endsection