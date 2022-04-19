
@extends('plantilla')

@section('seccion')
<h1 class="tittle" style = "margin-left:10px">Usuario Docente</h1>
<style>
<?php include 'C:\xampp\htdocs\proyecto\laravel\proyecto\resources\sass\style.css'; ?>
</style>

<div class="table-responsive">
  <table class="table">
  <thead class="text" style="background:#B0C4D9">
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
    <tbody >
        @foreach($users as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->edad}}</td>
           
        @if($item->institucion == 0)  
      <td></td>
      @else
      @foreach($instituciones as $institucion)
      @if($institucion->id==$item->institucion)
      <td>{{$institucion->nombre}}</td>
      @endif()  
      @endforeach()  
      @endif()  

      @if($item->programa == 0)  
      <td></td>
      @else
      @foreach($programas as $programa)
      @if($programa->id==$item->programa)
      <td>{{$programa->nombre}}</td>
      @endif()  
      @endforeach()  
      @endif() 
        <td>{{$item->asignatura}}</td>
        <td>{{$item->num_estudiante}}</td>
        <td>{{$item->num_m}}</td>
        <td>{{$item->num_h}}</td>
        <td>{{$item->semestre}}</td>
        <td>{{$item->modalidad}}</td>
        <td>
          <div class="row">
            <div class="col-md-6">
          <a href="{{ route('user.editar', $item) }}" class="btn" style="background: #486A8C;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16" style="color:#EFE6E6">
              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
            </svg>
          </a>
          </div>
          <div class="col-md-6">
        @can('eliminar docente')
          <form action="{{ route('user.eliminar', $item)}}" method="POST" class="d-inline">
        @method('DELETE')  
        @csrf
            <button class="btn" style="background: #486A8C;margin-left:5px" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" style="color:#EFE6E6">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
              </svg>
            </button>
          </form>
        @endcan
        </div>
        </div>
        </td>
      </tr>
      @endforeach()
    </tbody>
  </table>
</div>
<h1 class = "tittle">Estrategia</h1>
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
      <div>
      
      
      </div>
      <div class="row card-form" style = "height: 90VH">
      <div class="form-group col-md-6">
        
         <label class="text" for="tipo_estra">Tipo de Estrategia</label> 
         <a href="{{ route('tipo_estra', $item) }}" class="btn-link" style = "margin-top:35px; margin-left:245px; font-size: 35px;">+</a>
         
          
          <select name="tipo_estra" class="form-control form-gape" id="select-tipo_estra" value="{{ old('tipo_estra') }}">
          <option value="" selected disabled>Seleccione un Tipo de Estrategia</option>

                @foreach($tipo_estras as $tipo_estra)
                    <option value="{{ $tipo_estra->id}}" >
                        {{$tipo_estra->nombre}}
                    </option>
                @endforeach

            </select>
</div>
<div class="form-group col-md-6">
          <label class = "text" for="">Estrategia</label>
          <select name="nom_estra" class="form-control form-gape" id="select-nom_estra" value="{{ old('nom_estra') }}">
           </select>
           
</option>
</div>
        <div class="form-group col-md-6">
         <label class="text" for="valoracion_estra">Valoracion general de la estrategia</label>
           <select name="valoracion_estra" class="form-control form-gape" id="valoracion_estra" value="{{ old('valoracion_estra') }}">
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
         <label class="text" for="estra_evaluacion">Estrategia de Evaluacion</label>
          <select name="estra_evaluacion" class="form-control form-gape" id="estra_evaluacion" value="{{ old('estra_evaluacion') }}">
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
         <label class="text" for="compete_evaluar">Competencias a evaluar</label>
          <select name="compete_evaluar" class="form-control form-gape" id="compete_evaluar" value="{{ old('compete_evaluar') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Cognitivo</option>
            <option >Procedimental</option>
            <option >Actitudinal</option>
          </select>
        </div>
        <div class="form-group col-md-6">
         <label class="text" for="tipo_herra">Tipo de Herramienta</label>
         <a href="{{ route('tipo_herra', $item) }}" class="btn-link" style = "margin-top:35px; margin-left:245px; font-size: 35px;">+</a>
         <select name="tipo_herra" class="form-control form-gape" id="select-tipo_herra" value="{{ old('tipo_herra') }}">
          <option value="" selected disabled>Seleccione un Tipo de Herramienta</option>

                @foreach($tipo_herras as $tipo_herra)
                    <option value="{{ $tipo_herra->id}}" >
                        {{$tipo_herra->nombre}}
                    </option>
                @endforeach

            </select>
</div>
<div class="form-group col-md-6">
          <label class = "text" for="">Herramienta</label>
          <select name="nom_herra" class="form-control form-gape" id="select-nom_herra" value="{{ old('nom_herra') }}">
           </select>
           
</option>
</div>
        

   
        @foreach($columnas as $column)
        <div class="form-group col-md-6">
         <label class="text" for="{{$column->nombre}}">{{$column->nombre}}</label>
          <input type="text" name="{{$column->nombre}}" class="form-control form-gape" value="" >
          
                    
        </div>
        @endforeach
        <button class="btn-form" type="submit" style = "margin-top:30px; margin-left:127px">Agregar</button> 
      </div>
    </form>
    <br>
    
    <div class="table-responsive">
<table class="table">
  <thead class="text" style="background:#B0C4D9">
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Tipo de Estrategia</th>
      <th scope="col">Nombre de Estrategia</th>
      <th scope="col">Valoracion general de la estrategia</th>
      <th scope="col">Estrategia de Evaluacion</th>
      <th scope="col">Competencias a Evaluar</th>
      <th scope="col">Tipo de Herramienta</th>
      <th scope="col">Nombre de la Herramienta</th>
  
      
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
      <th scope="col"><button class="btn btn-block" typw="" data-toggle="modal" data-target="#exampleModal" style="background:#486A8C;color:#EFE6E6; font-size: 18px;">+</button></th>
      @endcan
    </tr>
  </thead>
  <tbody class = "text">
      @foreach($estrategias as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      @if($item->tipo_estra == 0) 
      <td></td>
      @else
      @foreach($tipo_estras as $tipo_estra)
      @if($tipo_estra->id==$item->tipo_estra)
      <td>{{$tipo_estra->nombre}}</td>
      @endif()  
      @endforeach()  
      @endif()  
      
      @if($item->nom_estra == 0)  
      <td></td>
      @else
      @foreach($estras as $estra)
      @if($estra->id==$item->nom_estra)
      <td>{{$estra->nombre}}</td>
      @endif()  
      @endforeach()  
      @endif() 
      
      
      <td>{{$item->valoracion_estra}}</td>
      <td>{{$item->estra_evaluacion}}</td>
      <td>{{$item->compete_evaluar}}</td>
      @if($item->tipo_herra == 0)  
      
      @else
      @foreach($tipo_herras as $tipo_herra)
      @if($tipo_herra->id==$item->tipo_herra)
      <td>{{$tipo_herra->nombre}}</td>
      @endif()  
      @endforeach()  
      @endif()  

      @if($item->nom_herra == 0)  
      
      @else
      @foreach($herras as $herra)
      @if($herra->id==$item->nom_herra)
      <td>{{$herra->nombre}}</td>
      @endif()  
      @endforeach()  
      @endif() 
      
      
      
      <td>
      <a href="{{ route('estrategia.editar', $item) }}" class="btn" style="background: #486A8C;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16" style="color:#EFE6E6">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
          </svg>
        </a>
        <form action="{{ route('estrategia.eliminar', $item)}}" method="POST" class="d-inline">
        @method('DELETE')  
        @csrf
        <button class="btn" style="background: #486A8C;" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" style="color:#EFE6E6">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
          </button>
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
        <h5 class="modal-title text" style="font-size:20px" id="exampleModalLabel">Agregar columna</h5>
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{ route('columna') }}" method="POST">
          @csrf
          <label for="name" class = "text">Nombre Columna</label>
          <input type="text" name="nombre" placeholder="Nombre Columna" class="form-control form-gape" value="" >
          <input type="text" name="tipo_columnas"  value="instituciones" hidden>
          <br>
          <button type="button" class="btn btn-secondary" style = "border-radius:10px" data-dismiss="modal">Close</button>
          <button  class="btn" type="submit"style="background:#486A8C;color:#EFE6E6; font-size: 18px; border-radius:10px">Save changes</button>
          </form>
        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>


<h1 class = "tittle">Herramienta</h1>
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
    <div class="form-group col-md-12">
      <label class = "text" for="nom_herra">Nombre</label>
      @foreach($estrategias as $estrategia) 
      <input type="text" name="nom_herra" placeholder="Nombre" class="form-control form-gape" value="{{ $estrategia->nom_herra }}" readonly>
        
           @endforeach
      
    </div>

    <div class="form-group col-md-6">
      <label for="tipo_licencia" class="text">Tipo Licencia</label>
      <select name="tipo_licencia" class="form-control form-gape" id="tipo_licencia" value="{{ old('tipo_licencia') }}">
        <option value="" selected disabled>Seleccione una opción</option>    
        <option>Propietaria</option>
            <option>Libre</option>
            <option>Hibrida</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="funciones" class="text">Portafolio de Funciones</label>
        <select name="funciones" class="form-control form-gape" id="funciones" value="{{ old('herramienta') }}">
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
      <label for="interaccion" class="text">Interaccion</label>
      <div class="row">
        <div class="col-md-10">
          <input name="interaccion" type="range" value="0" min="1" max="5" autocomplete="off" class="slider" id="input1">
        </div>
        <div class="col-md-2 text" id="labelNum1"></div>
      </div>
    </div>

    <div class="form-group col-md-6">
      <label for="diseño" class="text">Diseño</label>
      <div class="row">
        <div class="col-md-10">
          <input name="diseño" type="range" value="0" min="1" max="5" autocomplete="off" class="slider" id="input2">
        </div>
        <div class="col-md-2 text" id="labelNum2"></div>
      </div>
    </div>

    <div class="form-group col-md-6">
    <label for="usabilidad" class="text">Usabilidad</label>
      <div class="row">
        <div class="col-md-10">
          <input name="usabilidad" type="range" value="0" min="1" max="5" autocomplete="off" class="slider" id="input3">
        </div>
        <div class="col-md-2 text" id="labelNum3"></div>
      </div>
    </div>

    <div class="form-group col-md-6">
    <label for="documentacion" class="text">Documentacion</label>
      <div class="row">
        <div class="col-md-10">
          <input name="documentacion" type="range" value="0" min="1" max="5" autocomplete="off" class="slider" id="input4">
        </div>
        <div class="col-md-2 text" id="labelNum4"></div>
      </div>
    </div>
    <div class="form-group col-md-6">
    <label for="actualizaciones" class="text">Actualizaciones</label>
      <div class="row">
        <div class="col-md-10">
          <input name="actualizaciones" type="range" value="0" min="1" max="5" autocomplete="off" class="slider" id="input5">
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
          <input name="porcentaje_aprove" class="input-number text" type="number" min="0" max="100" value="0" id="input6">
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
          <input name="porcentaje_aproba" class="input-number text" type="number" min="0" max="100" value="0" id="input7">
        </div>
      </div>
    </div>
        @foreach($columnas as $key=>$column)
        <div class="form-group col-md-6">
         <label class="text" for="{{$column->nombre}}">{{$column->nombre}}</label>
          <input type="text" name="columnas[{{$column->id}}]" class="form-control form-gape" value="" >
              
        </div>
        @endforeach
        <br>
          <button class="btn-form" type="submit" style = "margin:10px; margin-left:627px">Agregar</button> 
      </div>
    </form>
    
    <br>
    <br>
    <div class="table-responsive">
    <table class="table">
  <thead class="text" style="background:#B0C4D9">
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
  <tbody class = "text">
      @foreach($herramientas as $item1)
      @foreach($estrategias as $item2)
    <tr>
      <th scope="row">{{$item1->id}}</th>
      <td>{{$item2->nom_herra}}</td>
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
      <a href="{{ route('herramienta.editar', $item) }}" class="btn" style="background: #486A8C;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16" style="color:#EFE6E6">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
          </svg>
        </a>
        <form action="{{ route('herramienta.eliminar', $item)}}" method="POST" class="d-inline">
        @method('DELETE')  
        @csrf
        <button class="btn" style="background: #486A8C;" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" style="color:#EFE6E6">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
          </button>
        </form>
      </td>
    </tr>
    @endforeach
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
         <label class="text" for="name">Nombre Columna</label>
          <input type="text" name="nombre" placeholder="Nombre Columna" class="form-control form-gape" value="" >
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
<script src="{{ asset('js/herra.js')}}" ></script>
<script src="{{ asset('js/estra.js')}}" ></script>

<script>
  <?php include 'C:\xampp\htdocs\proyecto\laravel\proyecto\resources\views\script.js'; ?>
</script>
@endsection