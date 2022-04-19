@extends('plantilla')

@section('seccion')
<h1 class = "tittle">Editar Admin</h1>
<style>
<?php include 'C:\xampp\htdocs\proyecto\laravel\proyecto\resources\sass\style.css'; ?>
</style>
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

      <div class="row card-form">
        <div class="form-group col-md-6">
          <label class="text" for="name">Nombre</label>
          <input type="text" name="name" placeholder="Nombre" class="form-control form-gape" value="{{ $users->name }}" readonly>
        </div>
        <div class="form-group col-md-6">
          <label class="text" for="email">E-mail</label>
          <input type="text" name="email" placeholder="E-mail" class="form-control form-gape" value="{{ $users->email }}" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="institucion" class = "text" >Institucion</label>
          <select name="institucion" placeholder="Institucion" class="form-control form-gape" value="{{ old('institucion') }}">
            <option  value="" selected disabled>Seleccione una Institucion</option>
            @foreach($instituciones as $institucion)
          <option value = "{{$institucion->id}}">{{$institucion->nombre}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group col-md-6">
        <label class = "text" for="tipo">Tipo</label>
        <div class="row">
          <div class="form-check col-md-5" style="margin-left:10px">
            <input class="form-check-input" type="radio" name="tipo" id="type1" value="Privada">
            <label class="form-check-label text" for="type1">Privada</label>
          </div>
          <div class="form-check col-md-6">
            <input class="form-check-input radio-butn" type="radio" name="tipo" id="type2" value="Pública">
            <label class="form-check-label text" for="type2">Pública</label>
          </div>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="pais">Pais</label>
          
          <select name="pais" class="form-control form-gape" id="select-pais" value="{{ $users->pais }}">
          <option value="" selected disabled>Seleccione un Pais</option>

                @foreach($paises as $pais)
                    <option value="{{ $pais->id}}" >
                        {{$pais->nombre}}
                    </option>
                @endforeach

            </select>
</div>
            <div class="form-group col-md-6">
          <label class = "text" for="ciudad">Ciudad</label>
          <select name="ciudad" class="form-control form-gape" id="select-ciudad" value="{{ $users->ciudad }}">
           </select>
           
</option>
        </div>
        <div class="form-group col-md-6">
        <label class = "text" for="region">Región</label>
        <div class="row">
          <div class="form-check col-md-5" style="margin-left:10px">
            <input class="form-check-input" type="radio" name="region" id="typeR1" value="Urbano">
            <label class="form-check-label text" for="typeR1" >Urbano</label>
          </div>
          <div class="form-check col-md-6">
            <input class="form-check-input radio-butn" type="radio" name="region" id="typeR2" value="Rural">
            <label class="form-check-label text" for="typeR2">Rural</label>
          </div>
        </div>
        </div>
        <br>
        <br>
        <br>
        <button class="btn-form" type="submit" style = "margin:10px; margin-left:127px">Editar</button> 
      </div>
    </form>
    <script src="{{ asset('js/editadmin.js')}}" ></script>
@endsection 