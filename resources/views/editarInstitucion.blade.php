@extends('plantilla')

@section('seccion')
<h1 class="tittle">Editar Institucion{{ $instituciones->id}}</h1>
<style>
<?php include '..\resources\sass\style.css'; ?>
</style>
@error('nombre')
<div class="alert alert-danger">
            El Nombre es obligatorio
          </div>
        @enderror

        @error('pais')
          <div class="alert alert-danger">
            El pais es obligatorio
          </div>
        @enderror

        @error('ciudad')
          <div class="alert alert-danger">
            La ciudad es obligatoria
          </div>
        @enderror
        
        @error('tipo')
          <div class="alert alert-danger">
            El tipo es obligatorio
          </div>
        @enderror

        @if (session('mensaje'))

            <div class="alert alert success">{{ session('mensaje')}}</div>

        @endif
      <form action="{{ route('institucion.update', $instituciones->id) }}" method="POST">
        @method('PUT')
      @csrf
      <div class="row card-form">
      <div class="form-group col-md-6">
          <label class = "text" for="nombre">Nombre</label>
          <input type="text" name="nombre" placeholder="Nombre" class="form-control form-gape" value="{{ $instituciones->nombre }}" >
        </div>

        <div class="form-group col-md-6">
          <label class = "text" for="pais">Pais</label>
          
          <select name="pais" class="form-control form-gape" id="select-pais" value="{{ $instituciones->pais }}">
          <option value="" selected disabled>{{ $instituciones->pais }}</option>

                @foreach($paises as $pais)
                    <option value="{{ $pais->id}}, {{ $pais->nombre}}" >
                        {{$pais->nombre}}
                    </option>
                @endforeach

            </select>
</div>
            <div class="form-group col-md-6">
          <label class = "text" for="ciudad">Ciudad</label>
          <select name="ciudad" class="form-control form-gape" id="select-ciudad" value="{{ $instituciones->ciudad }}">
          <option value="" selected disabled>Seleccione una Ciudad</option>
           </select>
           
</option>
        </div>

        <div class="form-group col-md-6">
        <label class = "text" for="tipo">Tipo</label>
        <div class="row">
          <div class="form-check col-md-5" style="margin-left:10px">
            <input class="form-check-input" type="radio" name="tipo" id="type1" value="Privada">
            <label class="form-check-label text" for="type1">Privada</label>
          </div>
          <div class="form-check col-md-6">
            <input class="form-check-input radio-butn" type="radio" name="tipo" id="type2" value="P??blica">
            <label class="form-check-label text" for="type2">P??blica</label>
          </div>
          </div>
        </div>
      
        <br>
        <br>
        <br>
        <button class="btn-form" type="submit" style = "margin:10px; margin-left:627px">Editar</button> 
      </div>
    </form>
    <script src="{{ asset('js/editinstitucion.js')}}" ></script>
@endsection