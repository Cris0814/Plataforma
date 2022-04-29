@extends('plantilla')

@section('seccion')
<h1 class = "tittle">Editar Herramienta {{ $herras->id}}</h1>
<style>
<?php include '..\resources\sass\style.css'; ?>
</style>
@error('nombre')
          <div class="alert alert-danger">
            El Nombre es obligatorio
          </div>
        @enderror

        @error('tipo_herra_id')
          <div class="alert alert-danger">
            El tipo de Herramienta es obligatoria
          </div>
        @enderror

        @if (session('mensaje'))

            <div class="alert alert success">{{ session('mensaje')}}</div>

        @endif
      <form action="{{ route('herra.update', $herras->id) }}" method="POST">
        @method('PUT')
      @csrf
      <div class="row card-form" style = "weight:70VH">
      <div class="form-group col-md-6">
          <label class = "text" for="nombre">Nombre Herramienta</label>
          <input type="text" name="nombre" placeholder="Nombre" class="form-control form-gape" value="{{ $herras->nombre }}" >
        </div>
        
        <div class="form-group col-md-6">
          <label for="tipo_herra_id" class = "text" >Tipo de Herramienta</label>
          <select name="tipo_herra_id" placeholder="TipoHerramienta" class="form-control form-gape" value="{{ old('tipo_herra_id') }}">
            <option  value="" selected disabled>Seleccione Tipo de Herramienta</option>
            @foreach($tipoherras as $tipoherra)  
          <option  value="{{$tipoherra->id}}">{{ $tipoherra->nombre }}</option>
                     
          @endforeach()
          </select>
        </div>
        <button class="btn-form" type="submit" style = "margin:10px; margin-left:627px">Editar</button> 
          </div>
        
      </div>
    </form>
@endsection