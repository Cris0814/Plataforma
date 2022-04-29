@extends('plantilla')

@section('seccion')
<!DOCTYPE html>
<html>
<head>
<h1 class = "tittle">Editar Herramienta{{ $herramientas->id}}</h1>
<style>
<?php include '..\resources\sass\style.css'; ?>
</style>
</head>
<body>
@error('nom_herra')
          <div class="alert alert-danger">
            El Nombre de la Herramienta es obligatorio
          </div>
        @enderror

        @error('tipo_licencia')
          <div class="alert alert-danger">
            El Tipo de licencia es obligatorio
          </div>
        @enderror

        @error('funciones')
          <div class="alert alert-danger">
            La funcion es obligatoria
          </div>
        @enderror
        
        @error('interaccion')
          <div class="alert alert-danger">
            La Interaccion es obligatoria
          </div>
        @enderror

        @error('diseño')
          <div class="alert alert-danger">
            El Diseño es obligatorio
          </div>
        @enderror

        @error('usabilidad')
          <div class="alert alert-danger">
            La usabilidad es obligatoria
          </div>
        @enderror
        
        @error('documentacion')
          <div class="alert alert-danger">
            La documentacion es obligatoria
          </div>
        @enderror

        @error('actualizaciones')
          <div class="alert alert-danger">
            La Actualizacion es obligatoria
          </div>
        @enderror

        @if (session('mensaje'))

            <div class="alert alert success">{{ session('mensaje')}}</div>

        @endif
      <form action="{{ route('herramienta.update', $herramientas->id) }}" method="POST">
        @method('PUT')
      @csrf
      <div class="row card-form" style = "height: 90VH">
      <div class="form-group col-md-6">
          <label class = "text" for="nom_herra">Nombre</label>
          <select name="nom_herra" class="form-control form-gape" id="nom_herra" value="{{ old('nom_herra') }}">
            <option  value="" selected disabled>{{ $herramientas->nom_herra }}</option>
            <option>Microsoft Word</option>
            <option>Microsoft Excel</option>
            <option>Microsoft PowerPoint</option>
            <option>Microsoft Outlook</option>
            <option>OneNote</option>
            <option>OneDrive</option>
            <option>Microsoft Teams</option>
            <option>Google Calendar</option>
            <option>Google Drive</option>
            <option>Google keep</option>
            <option>Google Task</option>
            <option>Documentos de Google</option>
            <option>Hojas de Calculo de Google</option>
            <option>Presentaciones de Google</option>
            <option>Google Sites</option>
            <option>Google Groups</option>
            <option>Currents</option>
            <option>Formularios de Google</option>
            <option>Adobe Reader</option>
            <option>Nitro Pro</option>
            <option>Facebook</option>
            <option>Instagram</option>
            <option>Twitter</option>
            <option>Whatsapp</option>
            <option>Telegram</option>
            <option>Zoom</option>
            <option>Google Meet</option>
            <option>Messenger</option>
            <option>Oculus</option>
            <option>WorkPlace</option>
            <option>Portal</option>
            <option>Novi</option>
            <option>Classroom</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="tipo_licencia">Tipo Licencia</label>
          <select name="tipo_licencia" class="form-control form-gape" id="tipo_licencia" value="{{ old('tipo_licencia') }}">
            <option value="" selected disabled>{{ $herramientas->tipo_licencia }}</option>
            <option>Propietaria</option>
            <option>Libre</option>
            <option>Hibrida</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="funciones">Portafolio de Funciones</label>
          <select name="funciones" class="form-control form-gape" id="funciones" value="{{ old('funciones') }}">
            <option value="" selected disabled>{{ $herramientas->funciones }}</option>
            <option>Audio</option>
            <option>Video</option>
            <option >Encuestas</option>
            <option >Tablero</option>
            <option >Video Llamada</option>
            <option >Multimedia</option>
          </select>
        </div>
        <div class="form-group col-md-6">
      <label for="interaccion" class="text">Interaccion</label>
      <div class="row">
        <div class="col-md-10">
          <input name="interaccion" type="range" value="{{ $herramientas->interaccion }}" min="1" max="5" autocomplete="off" class="slider" id="input1">
        </div>
        <div class="col-md-2 text" id="labelNum1"></div>
      </div>
    </div>

    <div class="form-group col-md-6">
      <label for="diseño" class="text">Diseño</label>
      <div class="row">
        <div class="col-md-10">
          <input name="diseño" type="range" value="{{ $herramientas->diseño }}" min="1" max="5" autocomplete="off" class="slider" id="input2">
        </div>
        <div class="col-md-2 text" id="labelNum2"></div>
      </div>
    </div>

    <div class="form-group col-md-6">
    <label for="usabilidad" class="text">Usabilidad</label>
      <div class="row">
        <div class="col-md-10">
          <input name="usabilidad" type="range" value="{{ $herramientas->usabilidad }}" min="1" max="5" autocomplete="off" class="slider" id="input3">
        </div>
        <div class="col-md-2 text" id="labelNum3"></div>
      </div>
    </div>

    <div class="form-group col-md-6">
    <label for="documentacion" class="text">Documentacion</label>
      <div class="row">
        <div class="col-md-10">
          <input name="documentacion" type="range" value="{{ $herramientas->documentacion }}" min="1" max="5" autocomplete="off" class="slider" id="input4">
        </div>
        <div class="col-md-2 text" id="labelNum4"></div>
      </div>
    </div>
    <div class="form-group col-md-6">
    <label for="actualizaciones" class="text">Actualizaciones</label>
      <div class="row">
        <div class="col-md-10">
          <input name="actualizaciones" type="range" value="{{ $herramientas->actualizaciones }}" min="1" max="5" autocomplete="off" class="slider" id="input5">
        </div>
        <div class="col-md-2 text" id="labelNum5"></div>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="porcentaje_aprove" class="text">Porcentaje de aprovechamiento</label>
      <div class="row">
        <div class="progress col-md-8">
          <div class="progress-bar" role="progressbar" id="porcentaje_aprove"></div>
        </div>
        <div class="col-md-3">
          <input name="porcentaje_aprove" class="input-number text" type="number" min="0" max="100" value="{{ $herramientas->porcentaje_aprove }}" id="input6">
        </div>
      </div>
    </div>

    <div class="form-group col-md-6">
    <label for="porcentaje_aproba" class="text">Porcentaje de Aprobacion</label>
      <div class="row">
        <div class="progress col-md-8">
          <div class="progress-bar" role="progressbar" id="porcentaje_aproba"></div>
        </div>
        <div class="col-md-3">
          <input name="porcentaje_aproba" class="input-number text" type="number" min="0" max="100" value="{{ $herramientas->porcentaje_aproba }}" id="input7">
        </div>
      </div>
    </div>
      
        <br>
        <br>
        <br>
        <button class="btn-form" type="submit" style = "margin:10px; margin-left:627px">Editar</button> 
      </div>
    </form>
    </body>
</html>  
<script>
  <?php include '..\resources\views\script.js'; ?>
</script>
@endsection