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
            <option >Estrategia de aprendizaje interactivo</option>
            <option >Estrategia de aprendizaje colaborativo</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="estra_apren_interactivo">Estrategia de Aprendizaje Interactivo</label>
          <select name="estra_apren_interactivo" class="form-control" id="estra_apren_interactivo" value="{{ old('estra_apren_interactivo') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Clase Magistral</option>
            <option >Analisis de videos</option>
            <option >Analisis de imagenes</option>
            <option >Seminario</option>
            <option >Exposiciones</option>
            <option >Socializacion y debates</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="estra_apren_colabo">Estrategia de aprendizaje colaborativo</label>
           <select name="estra_apren_colabo" class="form-control" id="estra_apren_colabo" value="{{ old('estra_apren_colabo') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Aprendizaje basado en problemas</option>
            <option >Aprendizaje basado en proyectos</option>
            <option >Analisis y discusion grupal</option>
            <option >Dialogo problematizador y reflexivo</option>
            <option >Taller practicos y analisis de casos</option>
            <option >Socializacion de producciones grupales</option>
            </select>
        </div>
        <div class="form-group col-md-6">
          <label for="estra_autoapren">Estrategia de Autoaprendizaje</label>
           <select name="estra_autoapren" class="form-control" id="estra_autoapren" value="{{ old('estra_autoapren') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Lecturas independientes</option>
            <option >Indagacion y analisis de informacion</option>
            <option >Elaboracion de ensayos</option>
            <option >Trabajos individuales</option>
            <option >Desarrollo de proyectos</option>
           
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="estra_didactica">Estrategia Didactica</label>
           <select name="estra_didactica" class="form-control" id="estra_didactica" value="{{ old('estra_didactica') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Estudio de caso</option>
            <option >Resolucion de problemas</option>
            <option >Trabajo por proyectos</option>
            <option >Gamificacion y videojuegos educativos</option>
            <option >Clase invertida (Flipped - Clasroom)</option>
            <option >Role Playing</option>
            <option >Trabajo de investigacion</option>
            <option >Panel</option>
            <option >Simulacion</option>
            <option >Debate</option>
           
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
            <option >Poster</option>
            <option >Examenes Escritos</option>
            <option >Portafolio de evidencias</option>
            <option >Examenes practicos</option>
            <option >Listado de criterios de evaluacion propio</option>
            <option >Bitacora de reflexion</option>
            <option >Articulo</option>
            <option >Proyecto</option>
            <option >Ensayo</option>
            <option >Trabajo de investigacion</option>
            <option >Mapa mental</option>
            <option >Mapa Conceptual</option>
            <option >Linea de tiempo</option>
            <option >Reseña de articulo</option>
            <option >Potcast</option>
            <option >Construccion de Video</option>
          </select>
        </div>

        
        <div class="form-group col-md-6">
          <label for="valoracion_estra">Valoracion general de la estrategia</label>
           <select name="valoracion_estra" class="form-control" id="valoracion_estra" value="{{ old('valoracion_estra') }}">
            <option value="" selected disabled>Seleccione una opción</option>
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
        <button class="btn btn-warning btn-block" type="submit">Editar</button> 
      </div>
    </form>
@endsection