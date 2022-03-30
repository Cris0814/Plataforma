@extends('plantilla')

@section('seccion')
<h1>Editar Admin</h1>
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

        @if (session('mensaje'))
        
        <div class="alert alert success">{{ session('mensaje')}}</div>

        @endif
<form action="{{ route('user.update', $users->id) }}" method="POST">
@method('PUT')      
@csrf

      <div class="row">
        <div class="form-group col-md-6">
          <label class="text" for="name">Nombre</label>
          <input type="text" name="name" placeholder="Nombre" class="form-control form-gape" value="{{ $users->name }}" readonly>
        </div>
        <div class="form-group col-md-6">
          <label class="text" for="email">E-mail</label>
          <input type="text" name="email" placeholder="E-mail" class="form-control form-gape" value="{{ $users->email }}" readonly>
        </div>
        <div class="form-group col-md-6">
          <label class="text" for="institucion">Institucion</label>
           <select name="institucion" class="form-control form-gape" id="institucion" value="{{ $users->institucion }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >JDC</option>
            <option> ITESA</option>
            
            
          </select>
        </div>
        <div class="form-group col-md-6">
          <label class="text" for="tipo">Tipo</label>
          <select name="tipo" class="form-control form-gape" id="tipo" value="{{ $users->tipo }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option ></option>
            <option >Privada</option>
            <option >Publica</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label class="text" for="pais">Pais</label>
          <select name="pais" class="form-control form-gape" id="pais" value="{{ $users->pais }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label class="text" for="ciudad">Ciudad</label>
          <select name="ciudad" class="form-control form-gape" id="ciudad" value="{{ $users->ciudad }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label class="text" for="region">Region</label>
          <select name="region" class="form-control form-gape" id="region" value="{{ $users->region }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
          </select>
        </div>
        <br>
        <br>
        <br>
        <button class="btn btn-warning btn-block" type="submit">Editar</button> 
      </div>
    </form>
@endsection 