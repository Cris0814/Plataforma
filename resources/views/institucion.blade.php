@extends('plantilla')

@section('seccion')

<h1 class="tittle">Institucion</h1>
<style>
<?php include 'C:\xampp\htdocs\proyecto\laravel\proyecto\resources\sass\style.css'; ?>
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
        <form action="{{ route('institucion.crear') }}" method="POST">     
        @csrf

      <div class="row card-form" style = "height: 53VH">
        <div class="form-group col-md-6">
          <label class = "text" for="nombre">Nombre</label>
          <input type="text" name="nombre" placeholder="Nombre" class="form-control form-gape" value="{{ old('nombre') }}" >
        </div>

        <div class="form-group col-md-6">
          <label class = "text" for="pais">Pais</label>
          <select name="pais" placeholder="Pais" class="form-control form-gape" value="{{ old('pais') }}">
          <option  value="" selected disabled>Seleccione un Pais</option>
            <option>pais1</option>
            <option>pais2</option>   
          </select>
        </div>

        <div class="form-group col-md-6">
          <label class = "text" for="ciudad">Ciudad</label>
          <select  name="ciudad" placeholder="Ciudad" class="form-control form-gape" value="{{ old('ciudad') }}">
          <option  value="" selected disabled>Seleccione una Ciudad</option>
            <option>ciudad1</option>
            <option>ciudad2</option>    
          </select>
        </div>

        <div class="form-group col-md-6">
          <label class = "text" for="tipo">Tipo</label>
          <div class="row">

          <div class="form-check col-md-5" style="margin-left:10px">
            <input class="form-check-input" type="radio" name="radioType" id="type1" value="{{ old('tipo') }}">
            <label class="form-check-label text" for="type1">Privada</label>
          </div>

          <div class="form-check col-md-6">
            <input class="form-check-input radio-butn" type="radio" name="radioType" id="type2" value="{{ old('tipo') }}">
            <label class="form-check-label text" for="type2">Pública</label>
          </div>

          </div>
          <br>
          <button class="btn-form" type="submit" style = "margin:10px; margin-left:127px">Agregar</button> 
        </div>
        
        @foreach($columnas as $key=>$column)
        <div class="form-group col-md-6">
          <label for="{{$column->nombre}}">{{$column->nombre}}</label>
          <input type="text" name="columnas[{{$column->id}}]" class="form-control" value="" >
              
        </div>
        @endforeach
      
      </div>
    </form>
    
<div class="table-responsive">

  <table class="table">

    <thead class="text" style="background:#B0C4D9">

    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Nombre Institucion</th>
      <th scope="col">Pais</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Tipo</th>
      @foreach($columnas as $column)
      <th scope="col">{{$column->nombre}}&nbsp
      @can('add')  
      <button class="btn btn-danger" data-toggle="modal" data-target="#modaleliminar{{ $column->id }}">-</button>
    </th>
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
      @endforeach
      <th scope="col">Acciones</th>
      @can('add')
      <th scope="col"><button class="btn btn-block" typw="" data-toggle="modal" data-target="#exampleModal" style="background:#486A8C;color:#EFE6E6; font-size: 18px;">+</button></th>
      @endcan 
    </tr>
  </thead>
  <tbody>
      @foreach($instituciones as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->pais}}</td>
      <td>{{$item->ciudad}}</td>
      <td>{{$item->tipo}}</td>
      
      <td>
      <a href="{{ route('institucion.editar', $item) }}" class="btn" style="background: #486A8C;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16" style="color:#EFE6E6">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
          </svg>
        </a>
        <form action="{{ route('institucion.eliminar', $item)}}" method="POST" class="d-inline">
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

<h1 class="tittle">Programa</h1>
@error('nombre')
          <div class="alert alert-danger">
            El Nombre es obligatorio
          </div>
        @enderror

        @error('institucion_id')
          <div class="alert alert-danger">
            La institucion es obligatoria
          </div>
        @enderror
        <form action="{{ route('programa.crear') }}" method="POST">     
        @csrf

    <div class="row card-form" style = "height: 40VH">

        <div class="form-group col-md-6">
          <label for="nombre" class = "text" >Nombre Programas</label>
          <textarea class="form-control" id="nombre" value="{{ old('nombre') }}" rows="3"></textarea>
        </div>
        
        <div class="form-group col-md-6">
          <label for="institucion_id" class = "text" >Institucion</label>
          <select name="institucion_id" placeholder="Institucion" class="form-control form-gape" value="{{ old('institucion_id') }}">
            <option  value="" selected disabled>Seleccione una Institucion</option>
            <option>Institucion1</option>
            <option>Institucion2</option>   
          </select>
        </div>
        
        @foreach($columnas as $key=>$column)
        <div class="form-group col-md-6">
          <label for="{{$column->nombre}}" class = "text" >{{$column->nombre}}</label>
          <input type="text" name="columnas[{{$column->id}}]" class="form-control form-gape" value="" >  
        </div>
        @endforeach
        <button class="btn-form" type="submit" style = "margin:10px; margin-left:627px">Agregar</button> 
      </div>
    </form>
  
    <div class="table-responsive">
    <table class="table">
    <thead class="text" style="background:#B0C4D9">
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Nombre Programa</th>
      <th scope="col">Institucion</th>
      
      @foreach($columnas as $column)
      <th scope="col">{{$column->nombre}}&nbsp
      @can('add')  
      <button class="btn btn-danger" data-toggle="modal" data-target="#modaleliminar{{ $column->id }}">-</button>
    </th>
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
  
      @endforeach
      
      <th scope="col">Acciones</th>
      @can('add')
      <th scope="col"><button class="btn btn-block" typw="" data-toggle="modal" data-target="#exampleModal" style="background:#486A8C;color:#EFE6E6; font-size: 18px;">+</button></th>
      @endcan      
    </tr>
  </thead>
  </div>
  <tbody>
      @foreach($programas as $item1)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item1->nombre}}</td>
      <td>{{$item1->institucion_id}}</td>
      
      
      <td>
      <a href="{{ route('programa.editar', $item) }}" class="btn" style="background: #486A8C;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16" style="color:#EFE6E6">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
          </svg>
        </a>
        <form action="{{ route('programa.eliminar', $item)}}" method="POST" class="d-inline">
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
@endsection 

