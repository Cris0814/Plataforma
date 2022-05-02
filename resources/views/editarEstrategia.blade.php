@extends('plantilla')

@section('seccion')
<h1 class = "tittle">Editar Estrategia{{ $estrategias->id}}</h1>
<style>
<?php include '..\resources\sass\style.css'; ?>
</style>
@error('tipo_estra')
          <div class="alert alert-danger">
            El Tipo de la Estrategia es obligatorio
          </div>
        @enderror
@error('nom_estra')
          <div class="alert alert-danger">
            El Nombre de la Estrategia es obligatorio
          </div>
        @enderror

        @error('tipo_herra')
          <div class="alert alert-danger">
            El tipo de Herramienta es obligatorio
          </div>
        @enderror

        @error('nom_herra')
          <div class="alert alert-danger">
            El Nombre de la Herramientas es obligatorio
          </div>
        @enderror

        @error('compete_evaluar')
          <div class="alert alert-danger">
            La Competencia a evaluar es obligatoria
          </div>
        @enderror
        
        

              
        @error('valoracion_estra')
          <div class="alert alert-danger">
            La Valoracion general de la estrategia es obligatoria
          </div>
        @enderror

        @if (session('mensaje'))

            <div class="alert alert success">{{ session('mensaje')}}</div>

        @endif
      <form action="{{ route('estrategia.update', $estrategias->id) }}" method="POST">
        @method('PUT')
      @csrf
      <div class="row">
      <div class="row card-form" style = "height: 70VH">
      <div class="form-group col-md-6">
          <label class = "text" for="tipo_estra">Tipo Estrategia</label>
          <select name="tipo_estra" class="form-control form-gape" id="select-tipo_estra" value="{{ old('tipo_estra') }}">
          <option value="" selected disabled>Seleccione un Tipo de Estrategia</option>

                @foreach($tipo_estras as $tipo_estra)
                    <option value="{{ $tipo_estra->id}}, {{ $tipo_estra->nombre}}" >
                        {{$tipo_estra->nombre}}
                    </option>
                @endforeach

            </select>
</div>
<div class="form-group col-md-6">
          <label class = "text" for="">Estrategia</label>
          <select name="nom_estra" class="form-control form-gape" id="select-estra" value="{{ old('nom_estra') }}">
           </select>
           
</option>
</div>
        
        
        
        <div class="form-group col-md-6">
         <label class="text" for="compete_evaluar">Competencias a evaluar</label>
          <select name="compete_evaluar" class="form-control form-gape" id="compete_evaluar" value="{{ old('compete_evaluar') }}">
            <option value="" selected disabled>{{ $estrategias->compete_evaluar }}</option>
            <option >Cognitivo</option>
            <option >Procedimental</option>
            <option >Actitudinal</option>
          </select>
        </div>
        <div class="form-group col-md-6">
         <label class="text" for="tipo_herra">Tipo de Herramienta</label>
         <select name="tipo_herra" class="form-control form-gape" id="select-tipo_herra" value="{{ old('tipo_herra') }}">
          <option value="" selected disabled>Seleccione un Tipo de Herramienta</option>

                @foreach($tipo_herras as $tipo_herra)
                    <option value="{{ $tipo_herra->id}}, {{ $tipo_herra->nombre}}" >
                        {{$tipo_herra->nombre}}
                    </option>
                @endforeach

            </select>
</div>
<div class="form-group col-md-6">
          <label class = "text" for="">Herramienta</label>
          <select name="nom_herra" class="form-control form-gape" id="select-herra" value="{{ old('nom_herra') }}">
           </select>
           
</option>
</div>
<div class="form-group col-md-6">
         <label class="text" for="valoracion_estra">Valoracion general de la estrategia</label>
           <select name="valoracion_estra" class="form-control form-gape" id="valoracion_estra" value="{{ old('valoracion_estra') }}">
            <option value="" selected disabled>{{ $estrategias->valoracion_estra }}</option>
            <option >0</option>
            <option >1</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
            <option >5</option>
            <option >6</option>
            <option >7</option>
            <option >8</option>
            <option >9</option>
            <option >10</option>
           
          </select>
        </div>
      
        <br>
        <br>
        <br>
        <button class="btn-form" type="submit" style = "margin:10px; margin-left:627px">Editar</button> 
      </div>
    </form>
    <script src="{{ asset('js/editestra.js')}}" ></script>
    <script src="{{ asset('js/editherra.js')}}" ></script>
@endsection