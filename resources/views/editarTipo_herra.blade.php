@extends('plantilla')

@section('seccion')
<h1 class = "tittle">Editar Tipo de Herramienta{{ $tipoherras->id}}</h1>
@error('nombre')
          <div class="alert alert-danger">
            El Nombre es obligatorio
          </div>
        @enderror

        @if (session('mensaje'))

            <div class="alert alert success">{{ session('mensaje')}}</div>

        @endif
      <form action="{{ route('tipoherra.update', $tipoherras->id) }}" method="POST">
        @method('PUT')
      @csrf
      <div class="row card-form">
      <div class="form-group col-md-6">
          <label class = "text" for="nombre">Nombre</label>
          <input type="text" name="nombre" placeholder="Nombre" class="form-control form-gape" value="{{ $tipoherras->nombre }}" >
        </div>
      
        <br>
        <br>
        <br>
        <button class="btn-form" type="submit" style = "margin:10px; margin-left:127px">Editar</button> 
      </div>
    </form>
@endsection