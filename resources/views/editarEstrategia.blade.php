@extends('plantilla')

@section('seccion')
<h1>Editar Estrategia{{ $estrategias->id}}</h1>
@error('nom_estra')
          <div class="alert alert-danger">
            El Nombre de la Estrategia es obligatorio
          </div>
        @enderror

        @error('estra_apren_interactivo')
          <div class="alert alert-danger">
            La Estrategia de Aprendizaje Interactivo es obligatoria
          </div>
        @enderror

        @error('estra_apren_colabo')
          <div class="alert alert-danger">
            La Estrategia de Aprendizaje Colaborativo es obligatoria
          </div>
        @enderror

        @error('estra_autoapren')
          <div class="alert alert-danger">
            La Estrategia de Autoaprendizaje es obligatorio
          </div>
        @enderror

        @error('estra_didactica')
          <div class="alert alert-danger">
            La Estrategia didactica es obligatoria
          </div>
        @enderror

        @error('compete_evaluar')
          <div class="alert alert-danger">
            La Competencia a evaluar es obligatoria
          </div>
        @enderror
        
        @error('estra_evaluacion')
          <div class="alert alert-danger">
            La Estrategia de Aprendizaje Colaborativo es obligatoria
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
      <div class="form-group col-md-6">
          <label for="nom_estra">Nombre Estrategia</label>
          <select name="nom_estra" class="form-control" id="nom_estra" value="{{ old('nom_estra') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="estra_apren_interactivo">Estrategia de Aprendizaje Interactivo</label>
          <select name="estra_apren_interactivo" class="form-control" id="estra_apren_interactivo" value="{{ old('estra_apren_interactivo') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="estra_apren_colabo">Estrategia de aprendizaje colaborativo</label>
           <select name="estra_apren_colabo" class="form-control" id="estra_apren_colabo" value="{{ old('estra_apren_colabo') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
            </select>
        </div>
        <div class="form-group col-md-6">
          <label for="estra_autoapren">Estrategia de Autoaprendizaje</label>
           <select name="estra_autoapren" class="form-control" id="estra_autoapren" value="{{ old('estra_autoapren') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
            <option >Opcion4</option>
            <option >Opcion5</option>
           
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="estra_didactica">Estrategia Didactica</label>
           <select name="estra_didactica" class="form-control" id="estra_didactica" value="{{ old('estra_didactica') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
            <option >Opcion4</option>
            <option >Opcion5</option>
           
          </select>
        </div>
        
        <div class="form-group col-md-6">
          <label for="compete_evaluar">Competencias a evaluar</label>
          <select name="compete_evaluar" class="form-control" id="compete_evaluar" value="{{ old('compete_evaluar') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Cognitivo</option>
            <option >Procedimental</option>
            <option >Actitudinal</option>
          </select>
        </div>
        
        <div class="form-group col-md-6">
          <label for="estra_evaluacion">Estrategia de Evaluacion</label>
          <select name="estra_evaluacion" class="form-control" id="estra_evaluacion" value="{{ old('estra_evaluacion') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
          </select>
        </div>

        
        <div class="form-group col-md-6">
          <label for="valoracion_estra">Valoracion general de la estrategia</label>
           <select name="valoracion_estra" class="form-control" id="valoracion_estra" value="{{ old('valoracion_estra') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >1</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
            <option >5</option>
           
          </select>
        </div>
      
        <br>
        <br>
        <br>
        <button class="btn btn-warning btn-block" type="submit">Editar</button> 
      </div>
    </form>
@endsection