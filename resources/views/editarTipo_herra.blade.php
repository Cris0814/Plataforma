@extends('plantilla')

@section('seccion')
<h1 class = "tittle">Editar tipo de herramienta {{ $tipoherras->id}}</h1>
<style>
<?php include '..\resources\sass\style.css'; ?>
</style>
@error('nombre')
          <div class="alert alert-danger">
            El Nombre es obligatorio
          </div>
        @enderror

        @if (session('mensaje'))

            <div class="alert alert success">{{ session('mensaje')}}</div>

        @endif
      <form action="{{ route('tipo_herra.update', $tipoherras->id) }}" method="POST">
        @method('PUT')
      @csrf
      <div class="row card-form">
      <div class="form-group col-md-6">
          <label class = "text" for="nombre">Nombre</label>
          <input type="text" name="nombre" placeholder="Nombre" class="form-control form-gape" value="{{ $tipoherras->nombre }}" >
        </div>
        <div class="form-group col-md-6">
        <button class="btn-form" type="submit" style = "margin:30px;">Editar</button> 
        </div>
      </div>
    </form>
@endsection