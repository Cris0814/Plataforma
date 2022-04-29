@extends('plantilla')

@section('seccion')
<h1 class="tittle">Editar Programa {{ $programas->id}}</h1>
<style>
<?php include '..\resources\sass\style.css'; ?>
</style>
@error('nombre')
          <div class="alert alert-danger">
            El Nombre es obligatorio
          </div>
        @enderror

        @error('institucion_id')
          <div class="alert alert-danger">
            La institucion es obligatoria
          </div>
        @enderror

        @if (session('mensaje'))

            <div class="alert alert success">{{ session('mensaje')}}</div>

        @endif
      <form action="{{ route('programa.update', $programas->id) }}" method="POST">
        @method('PUT')
      @csrf
      <div class="row card-form">
      <div class="form-group col-md-6">
          <label class = "text" for="nombre">Nombre</label>
          <input type="text" name="nombre" placeholder="Nombre" class="form-control form-gape" value="{{ $programas->nombre }}" >
        </div>

        <div class="form-group col-md-6">
          <label for="institucion_id" class = "text" >Institucion</label>
          <select name="institucion_id" placeholder="Institucion" class="form-control form-gape" value="{{ old('institucion_id') }}">
            <option  value="" selected disabled>Seleccione una Institucion</option>
            @foreach($instituciones as $institucion)
          <option value = "{{$institucion->id}}">{{$institucion->nombre}}</option>
          @endforeach()
          </select>
        </div>

        

        
        <br>
        <br>
        <br>
        <button class="btn-form" type="submit" style = "margin:10px; margin-left:627px">Editar</button> 
      </div>
    </form>
@endsection