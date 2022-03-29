@extends('plantilla')

@section('seccion')

<h1>Institucion</h1>
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

      <div class="row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{ old('nombre') }}" >
        </div>
        <div class="form-group col-md-6">
          <label for="pais">Pais</label>
          <select name="pais" placeholder="Pais" class="form-control" value="{{ old('pais') }}">
          <option  value="" selected disabled>Seleccione un Pais</option>
            <option>pais1</option>
            <option>pais2</option>   
</select>
        </div>
        
        <div class="form-group col-md-6">
          <label for="ciudad">Ciudad</label>
          <select  name="ciudad" placeholder="Ciudad" class="form-control" value="{{ old('ciudad') }}">
          <option  value="" selected disabled>Seleccione una Ciudad</option>
            <option>ciudad1</option>
            <option>ciudad2</option>    
        </select>
           

        </div>
        <div class="form-group col-md-6">
          <label for="tipo">Tipo</label>
           <select name="tipo" placeholder="tipo" class="form-control"  value="{{ old('tipo') }}">
           <option  value="" selected disabled>Seleccione un Tipo</option>
            <option>Publica</option>
            <option>Privada</option>       
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
      <th scope="col">Nombre Institucion</th>
      <th scope="col">Pais</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Tipo</th>
      
      
      
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
      @foreach($instituciones as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->pais}}</td>
      <td>{{$item->ciudad}}</td>
      <td>{{$item->tipo}}</td>
      
      <td>
        <a href="{{ route('institucion.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>
        
        <form action="{{ route('institucion.eliminar', $item)}}" method="POST" class="d-inline">
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
          <input type="text" name="tipo_columnas"  value="instituciones" hidden>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button  class="btn btn-primary" type="submit">Save changes</button>
          </form>
        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>

<h1>Programa</h1>
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

      <div class="row">
      <div class="form-group">
    <label for="nombre">Nombre Programas</label>
    <textarea class="form-control" id="nombre" value="{{ old('nombre') }}" rows="3"></textarea>
  </div>
        
        <div class="form-group col-md-6">
          <label for="institucion_id">Institucion</label>
          <select name="institucion_id" placeholder="Institucion" class="form-control" value="{{ old('institucion_id') }}">
          <option  value="" selected disabled>Seleccione una Institucion</option>
            <option>Institucion1</option>
            <option>Institucion2</option>   
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
      <th scope="col">Nombre Programa</th>
      <th scope="col">Institucion</th>
      
      
      
      
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
      @foreach($programas as $item1)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item1->nombre}}</td>
      <td>{{$item1->institucion_id}}</td>
      
      
      <td>
        <a href="{{ route('programa.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>
        
        <form action="{{ route('programa.eliminar', $item)}}" method="POST" class="d-inline">
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
          <input type="text" name="tipo_columnas"  value="instituciones" hidden>
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

