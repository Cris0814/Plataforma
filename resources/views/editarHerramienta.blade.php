@extends('plantilla')

@section('seccion')
<h1>Editar Herramienta{{ $herramientas->id}}</h1>

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
      <div class="row">
      <div class="form-group col-md-6">
          <label for="nom_herra">Nombre Herramienta</label>
          <select name="nom_herra" class="form-control" id="nom_herra" value="{{ $herramientas->nom_herra }}">
            <option  value="" selected disabled>Seleccione una opción</option>
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
          <label for="tipo_licencia">Tipo Licencia</label>
          <select name="tipo_licencia" class="form-control" id="tipo_licencia" value="{{ $herramientas->tipo_licencia }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option>Propietaria</option>
            <option>Libre</option>
            <option>Hibrida</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="funciones">Portafolio de Funciones</label>
          <select name="funciones" class="form-control" id="funciones" value="{{ $herramientas->funciones}}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option>Audio</option>
            <option>Video</option>
            <option >Encuestas</option>
            <option >Tablero</option>
            <option >Video Llamada</option>
            <option >Multimedia</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="interaccion">Interaccion</label>
           <select name="interaccion" class="form-control" id="interaccion" value="{{ $herramientas->interaccion }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >1</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
            <option >5</option>
           
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="diseño">Diseño</label>
           <select name="diseño" class="form-control" id="diseño" value="{{ $herramientas->diseño }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >1</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
            <option >5</option>
           
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="usabilidad">Usabilidad</label>
           <select name="usabilidad" class="form-control" id="usabilidad" value="{{ $herramientas->usabilidad }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >1</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
            <option >5</option>
           
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="documentacion">Documentacion</label>
           <select name="documentacion" class="form-control" id="documentacion" value="{{ $herramientas->documentacion }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >1</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
            <option >5</option>
           
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="actualizaciones">Actualizaciones</label>
           <select name="actualizaciones" class="form-control" id="interaccion" value="{{ $herramientas->actualizaciones }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >1</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
            <option >5</option>
           
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="porcentaje_aprove">Porcentaje de Aprovechamiento</label>
           <select name="porcentaje_aprove" class="form-control" id="porcentaje_aprove" value="{{ old('porcentaje_aprove') }}">
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
        <div class="form-group col-md-6">
          <label for="porcentaje_aproba">Porcentaje de Aprobacion</label>
           <select name="porcentaje_aproba" class="form-control" id="porcentaje_aproba" value="{{ old('porcentaje_aproba') }}">
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
        <button class="btn btn-warning btn-block " typw="submit">Editar</button> 
      </div>
    </form>
@endsection