
@extends('plantilla')

@section('seccion')
<h1>Usuario Docente</h1>


<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">E-mail</th>
        <th scope="col">Edad</th>
        <th scope="col">Institucion</th>
        <th scope="col">Programa</th>
        <th scope="col">Asignatura</th>
        <th scope="col">Numero estudiante</th>
        <th scope="col">Num Mujeres</th>
        <th scope="col">Num Hombres</th>
        <th scope="col">Semestre</th>
        <th scope="col">Modalidad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->edad}}</td>
           
        <td>{{$item->institucion}}</td>
        <td>{{$item->programa}}</td>
        <td>{{$item->asignatura}}</td>
        <td>{{$item->num_estudiante}}</td>
        <td>{{$item->num_m}}</td>
        <td>{{$item->num_h}}</td>
        <td>{{$item->semestre}}</td>
        <td>{{$item->modalidad}}</td>
        <td>
          <a href="{{ route('user.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>
          @can('eliminar docente')
          <form action="{{ route('user.eliminar', $item)}}" method="POST" class="d-inline">
          @method('DELETE')  
          @csrf
          
            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
          </form>
          @endcan
        </td>

      </tr>
      @endforeach()
    </tbody>
  </table>
</div>
<h1>Estrategia</h1>
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
        
        @error('estra_evaluacion')
          <div class="alert alert-danger">
            La Estrategia de evaluacion es obligatoria
          </div>
        @enderror

              
        @error('valoracion_estra')
          <div class="alert alert-danger">
            La Valoracion general de la estrategia es obligatoria
          </div>
        @enderror
      <form action="{{ route('estrategia.crear') }}" method="POST">
      @csrf
      <div class="row">
      <div class="form-group col-md-6">
          <label for="tipo_estra">Tipo de Estrategia</label>
          <select name="tipo_estra" class="form-control" id="tipo_estra" value="{{ old('tipo_estra') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Estrategia de aprendizaje interactivo</option>
            <option >Estrategia de aprendizaje colaborativo</option>
            <option >Estrategia de autoaprendizaje</option>
            <option >Estrategia de aprendizaje didactica</option>
            <option >Estrategia de evaluacion</option>
           
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="nom_estra">Nombre Estrategia</label>
          <select name="nom_estra" class="form-control" id="nom_estra" value="{{ old('nom_estra') }}">
            <option  value="" selected disabled>Seleccione una opción</option>
            <option >Clase Magistral</option>
            <option >Analisis de videos</option>
            <option >Analisis de imagenes</option>
            <option >Seminario</option>
            <option >Exposiciones</option>
            <option >Socializacion y debates</option>
            

            <option >Aprendizaje basado en problemas</option>
            <option >Aprendizaje basado en proyectos</option>
            <option >Analisis y discusion grupal</option>
            <option >Dialogo problematizador y reflexivo</option>
            <option >Taller practicos y analisis de casos</option>
            <option >Socializacion de producciones grupales</option>


            <option >Lecturas independientes</option>
            <option >Indagacion y analisis de informacion</option>
            <option >Elaboracion de ensayos</option>
            <option >Trabajos individuales</option>
            <option >Desarrollo de proyectos</option>


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
          <label for="tipo_herra">Tipo de Herramienta</label>
          <select name="tipo_herra" class="form-control" id="tipo_herra" value="{{ old('tipo_herra') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Creacion de video</option>
            <option >Publicacion de videos videos</option>
            <option >Visualizacion de videos</option>
            
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="nom_herra">Nombre de la Herramienta</label>
           <select name="nom_herra" class="form-control" id="nom_herra" value="{{ old('nom_herra') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            
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
        @foreach($columnas as $column)
        <div class="form-group col-md-6">
          <label for="{{$column->nombre}}">{{$column->nombre}}</label>
          <input type="text" name="{{$column->nombre}}" class="form-control" value="" >
          
                    
        </div>
        @endforeach
        <br>
        <br>
        <br>
        <button class="btn btn-primary btn-block" type="submit">Agregar</button> 
      </div>
    </form>
    <br>
    
    <div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Tipo de Estrategia</th>
      <th scope="col">Nombre de Estrategia</th>
      <th scope="col">Tipo de Herramienta</th>
      <th scope="col">Nombre de la Herramienta</th>
      <th scope="col">Competencias a Evaluar</th>
      <th scope="col">Estrategia de Evaluacion</th>
      <th scope="col">Valoracion general de la estrategia</th>
       @can('add')     
      @foreach($columnas as $column)
      <th scope="col">{{$column->nombre}}&nbsp<button class="btn btn-danger" data-toggle="modal" data-target="#modaleliminar{{ $column->id }}">-</button></th>
     
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
      @endcan
      <th scope="col">Acciones</th>
      @can('add')
      <th scope="col"><button class="btn btn-block bg-gradient-primary" typw="" data-toggle="modal" data-target="#exampleModal">+</button></th>
      @endcan
    </tr>
  </thead>
  <tbody>
      @foreach($estrategias as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->tipo_estra}}</td>
      <td>{{$item->nom_estra}}</td>
      <td>{{$item->tipo_herra}}</td>
      <td>{{$item->nom_herra}}</td>
      <td>{{$item->compete_evaluar}}</td>
      <td>{{$item->estra_evaluacion}}</td>
      <td>{{$item->valoracion_estra}}</td>
      <td>
        <a href="{{ route('estrategia.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>

        <form action="{{ route('estrategia.eliminar', $item) }}" method="POST" class="d-inline">
          @method('DELETE')
          @csrf
            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button> 
        </form>    
      </td>
    </tr>
    @endforeach()
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
          <input type="text" name="tipo_columnas"  value="estrategias" hidden>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button  class="btn btn-primary" type="submit">Save changes</button>
          </form>
        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>


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
      <div class="row card-form">
      
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
      @foreach($herramientas as $item1)
    <tr>
      <th scope="row">{{$item1->id}}</th>
      <td>{{$item1->nom_herra}}</td>
      <td>{{$item1->tipo_licencia}}</td>
      <td>{{$item1->funciones}}</td>
      <td>{{$item1->interaccion}}</td>
      <td>{{$item1->diseño}}</td>
      <td>{{$item1->usabilidad}}</td>
      <td>{{$item1->documentacion}}</td>
      <td>{{$item1->actualizaciones}}</td>
      <td>{{$item1->porcentaje_aprove}}</td>
      <td>{{$item1->porcentaje_aproba}}</td>
      <td>
        <a href="{{ route('herramienta.editar', $item1) }}" class="btn btn-warning btn-sm">Editar</a>
        
        <form action="{{ route('herramienta.eliminar', $item1)}}" method="POST" class="d-inline">
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