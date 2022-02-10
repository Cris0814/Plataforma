@extends('plantilla')

@section('seccion')
<h1>Herramienta</h1>
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
      <form action="{{ route('herramienta.crear') }}" method="POST">
      @csrf
      <div class="row">
      <div class="form-group col-md-6">
          <label for="nom_herra">Nombre Herramienta</label>
          <select name="nom_herra" class="form-control" id="nom_herra" value="{{ old('nom_herra') }}">
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
          <select name="tipo_licencia" class="form-control" id="tipo_licencia" value="{{ old('tipo_licencia') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option>Propietaria</option>
            <option>Libre</option>
            <option>Hibrida</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="funciones">Portafolio de Funciones</label>
          <select name="funciones" class="form-control" id="funciones" value="{{ old('funciones') }}">
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
           <select name="interaccion" class="form-control" id="interaccion" value="{{ old('interaccion') }}">
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
           <select name="diseño" class="form-control" id="diseño" value="{{ old('diseño') }}">
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
           <select name="usabilidad" class="form-control" id="usabilidad" value="{{ old('usabilidad') }}">
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
           <select name="documentacion" class="form-control" id="documentacion" value="{{ old('documentacion') }}">
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
           <select name="actualizaciones" class="form-control" id="actualizaciones" value="{{ old('actualizaciones') }}">
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
        @foreach($columnas as $key=>$column)
        <div class="form-group col-md-6">
          <label for="{{$column->nombre}}">{{$column->nombre}}</label>
          <input type="text" name="columnas[{{$column->id}}]" class="form-control" value="" >
              
        </div>
        @endforeach
        <br>
        <br>
        <br>
        <button class="btn btn-primary btn-block" typw="submit">Agregar</button> 
      </div>
    </form>
    
    <br>
    <br>
    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Nombre Herramienta</th>
      <th scope="col">Tipo de Licencia</th>
      <th scope="col">Portafolio de Funciones</th>
      <th scope="col">Interaccion</th>
      <th scope="col">Diseño</th>
      <th scope="col">Usabilidad</th>
      <th scope="col">Documentacion de Soporte</th>
      <th scope="col">Actualizaciones</th>
      <th scope="col">porcentaje_aprove</th>
      <th scope="col">porcentaje_aproba</th>
      
      @foreach($columnas as $column)
      <th scope="col">{{$column->nombre}}&nbsp
      @can('add')  
      <button class="btn btn-danger" data-toggle="modal" data-target="#modaleliminar{{ $column->id }}">-</button></th>
     @endcan
      <div class="modal fade" id="modaleliminar{{$column->id}}" tabindex="-1" role="dialog" aria-labelledby="modaleliminarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modaleliminarlLabel">Eliminar Columna</h5>
    
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('columna.eliminarcol', $column->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <p> Estas seguro que deseas eliminar esta columna ?</p>
          
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button  class="btn btn-danger" type="submit">Eliminar Columna</button>
              </form>
            </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
  </div>
  
      @endforeach
      
      <th scope="col">Acciones</th>
      @can('add')
      <th scope="col"><button class="btn btn-block bg-gradient-primary" typw="" data-toggle="modal" data-target="#exampleModal">+</button></th>
      @endcan
      
                
    </tr>
  </thead>
  </div>
  <tbody>
      @foreach($herramientas as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nom_herra}}</td>
      <td>{{$item->tipo_licencia}}</td>
      <td>{{$item->funciones}}</td>
      <td>{{$item->interaccion}}</td>
      <td>{{$item->diseño}}</td>
      <td>{{$item->usabilidad}}</td>
      <td>{{$item->documentacion}}</td>
      <td>{{$item->actualizaciones}}</td>
      <td>{{$item->porcentaje_aprove}}</td>
      <td>{{$item->porcentaje_aproba}}</td>
      <td>
        <a href="{{ route('herramienta.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>
        
        <form action="{{ route('herramienta.eliminar', $item)}}" method="POST" class="d-inline">
        @method('DELETE')  
        @csrf
          <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Columna</h5>
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{ route('columna') }}" method="POST">
          @csrf
          <label for="name">Nombre Columna</label>
          <input type="text" name="nombre" placeholder="Nombre Columna" class="form-control" value="" >
          <input type="text" name="tipo_columnas"  value="herramientas" hidden>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button  class="btn btn-primary" type="submit">Save changes</button>
          </form>
        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>





@endsection