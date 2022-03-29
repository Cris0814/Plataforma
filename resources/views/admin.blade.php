<br>
@extends('plantilla')

@section('seccion')
<h1> Administrador</h1>

       @error('name')
          <div class="alert alert-danger">
            El Nombre es obligatorio
          </div>
        @enderror

        @error('email')
          <div class="alert alert-danger">
            El E-mail es obligatorio
          </div>
        @enderror

        @error('institucion')
          <div class="alert alert-danger">
            La institucion es obligatoria
          </div>
        @enderror
        
        @error('tipo')
          <div class="alert alert-danger">
            El tipo es obligatorio
          </div>
        @enderror

        @error('pais')
          <div class="alert alert-danger">
            El País es obligatorio
          </div>
        @enderror

        @error('ciudad')
          <div class="alert alert-danger">
            La ciudad es abligatoria
          </div>
        @enderror
        
        @error('region')
          <div class="alert alert-danger">
            La region es obligatoria
          </div>
        @enderror

      <form action="{{ route('user.crear') }}" method="POST">
        @csrf
        <input type="text" name="role" value="1" hidden>
        <input type="text" name="is_admin" value="1" hidden>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="name">Nombre</label>
          <input type="text" name="name" placeholder="Nombre" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group col-md-6">
          <label for="email">E-mail</label>
          <input type="text" name="email" placeholder="E-mail" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group col-md-6">
          <label for="institucion">Institucion</label>
           <select name="institucion" class="form-control" id="institucion" value="{{ old('institucion') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >JDC</option>
            <option >ITESA</option>

          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="tipo">Tipo</label>
          <select name="tipo" class="form-control" id="tipo" value="{{ old('tipo') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Privada</option>
            <option >Publica</option>
            
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="pais">País</label>
          <select name="pais" class="form-control" id="pais" value="{{ old('pais') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="ciudad">Ciudad</label>
          <select name="ciudad" class="form-control" id="ciudad" value="{{ old('ciudad') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >OPCION 1</option>
            <option >OPCION 2</option>
            <option >OPCION 3</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="region">Region</label>
          <select name="region" class="form-control" id="region" value="{{ old('region') }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Urbano</option>
            <option >Rural</option>
            
        </select>
        
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
      <th scope="col">Nombre</th>
      <th scope="col">E-mail</th>
      <th scope="col">Institucion</th>
      <th scope="col">Tipo</th>
      <th scope="col">Pais</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Region</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
      @foreach($admins as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->intitucion}}</td>
      <td>{{$item->getRoleNames()}}</td>
      <td>{{$item->pais}}</td>
      <td>{{$item->ciudad}}</td>
      <td>{{$item->region}}</td>
      <td>
        <a href="{{ route('admin.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>
        
        <form action="{{ route('admin.eliminar', $item)}}" method="POST" class="d-inline">
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
@endsection