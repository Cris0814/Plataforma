@extends('plantilla')

@section('seccion')
<h1 class="tittle">Editar Tipo de Herramienta{{ $tipoherras->id}}</h1>
@error('nombre')
          <div class="alert alert-danger">
            El Nombre es obligatorio
          </div>
        @enderror

        @error('tipo_estra_id')
          <div class="alert alert-danger">
            El tipo de estrategia es obligatoria
          </div>
        @enderror

        @if (session('mensaje'))

            <div class="alert alert success">{{ session('mensaje')}}</div>

        @endif
      <form action="{{ route('tipoestra.update', $tipoestras->id) }}" method="POST">
        @method('PUT')
      @csrf
      <div class="row card-form">
      <div class="form-group col-md-6">
          <label class = "text" for="nombre">Nombre Estrategia</label>
          <input type="text" name="nombre" placeholder="Nombre" class="form-control form-gape" value="{{ $tipoestras->nombre }}" >
        </div>
        
        <div class="form-group col-md-6">
          <label for="tipo_estra_id" class = "text" >Tipo de Estrategia</label>
          <select name="tipo_estra_id" placeholder="TipoEstrategia" class="form-control form-gape" value="{{ old('tipo_estra_id') }}">
            <option  value="" selected disabled>{{ $tipoestras->tipo_estra_id }}</option>
            <option>Institucion1</option>
            <option>Institucion2</option>   
          </select>
        </div>
      
        <br>
        <br>
        <br>
        <button class="btn btn-primary btn-block btn-form" type="submit">Editar</button> 
      </div>
    </form>
@endsection