@extends('plantilla')

@section('seccion')
<h1 class="tittle">Editar Programa {{ $programas->id}}</h1>
<style>
<?php include 'C:\xampp\htdocs\proyecto\laravel\proyecto\resources\sass\style.css'; ?>
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
          <label class = "text" for="pais">Pais</label>
          <select name="pais" placeholder="Pais" class="form-control form-gape" value="{{ old('pais') }}">
          <option  value="" selected disabled>{{ $programas->pais }}</option>
            <option>pais1</option>
            <option>pais2</option>   
          </select>
        </div>

        <div class="form-group col-md-6">
          <label class = "text" for="ciudad">Ciudad</label>
          <select  name="ciudad" placeholder="Ciudad" class="form-control form-gape" value="{{ old('ciudad') }}">
          <option  value="" selected disabled>{{ $programas->ciudad }}</option>
            <option>ciudad1</option>
            <option>ciudad2</option>    
          </select>
        </div>

        <div class="form-group col-md-6">
        <label class = "text" for="tipo">Tipo</label>
        <div class="row">
          <div class="form-check col-md-5" style="margin-left:10px">
            <input class="form-check-input" type="radio" name="tipo" id="type1" value="Privada">
            <label class="form-check-label text" for="type1">Privada</label>
          </div>
          <div class="form-check col-md-6">
            <input class="form-check-input radio-butn" type="radio" name="tipo" id="type2" value="Pública">
            <label class="form-check-label text" for="type2">Pública</label>
          </div>
          </div>
        </div>
      
        <br>
        <br>
        <br>
        <button class="btn-form" type="submit" style = "margin:10px; margin-left:627px">Editar</button> 
      </div>
    </form>
@endsection