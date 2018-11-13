@extends('layouts.app')
@section('title','Inicio')
@section('content')

    <h2>Código de Pacientes</h2>

    <div class="row">
        @foreach ($pacientes as $paciente)
            <div class="col-md-4 text-center">
                <div>{!! DNS2D::getBarcodeSVG($paciente->barcode, "PDF417",2,2  ) !!}</div>
                <!--  <div>{!! DNS1D::getBarcodeHTML($paciente->barcode, 'C39') !!}</div> -->
                <a href="{{ route('pacientes.show',$paciente->id) }}">{{ $paciente->name}}</a>
            </div>
        @endforeach
    </div>
    {{ $pacientes->links() }}
@endsection
