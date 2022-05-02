<br>
@extends('plantilla')

@section('seccion')
<h1 class="tittle"> Administrador</h1>
<style>
<?php include '..\resources\sass\style.css'; ?>
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
        
        

        @error('pais')
          <div class="alert alert-danger">
            El País es obligatorio
          </div>
        @enderror

        @error('ciudad')
          <div class="alert alert-danger">
            La Ciudad es abligatoria
          </div>
        @enderror
        
        @error('region')
          <div class="alert alert-danger">
            La region es obligatoria
          </div>
        @enderror
    <
    
      <form action="{{ route('user.crear') }}" method="POST">
        @csrf
        <input type="text" name="role" value="1" hidden>
        <input type="text" name="is_admin" value="1" hidden>
      <div class="row card-form" style = "height: 70VH">
        <div class="form-group col-md-6">
          <label class = "text" for="name">Nombre</label>
          <input type="text" name="name" placeholder="Nombre" class="form-control form-gape" value="{{ old('name') }}">
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="email">E-mail</label>
          <input type="text" name="email" placeholder="E-mail" class="form-control form-gape" value="{{ old('email') }}">
        </div>
        <div class="form-group col-md-6">
          <label for="institucion" class = "text" >Institucion</label>
          <select name="institucion" placeholder="Institucion" class="form-control form-gape" value="{{ old('institucion') }}">
            <option  value="" selected disabled>Seleccione una Institucion</option>
            @foreach($instituciones as $institucion)
          <option value = "{{$institucion->id}},{{$institucion->nombre}}">{{$institucion->nombre}}</option>
          @endforeach()
          </select>
        </div>
        
        <div class="form-group col-md-6">
          <label class = "text" for="pais">Pais</label>
          
          <select name="pais" class="form-control form-gape" id="select-pais" value="{{ old('pais') }}">
          <option value="" selected disabled>Seleccione un Pais</option>

          @foreach($paises as $pais)
                    <option value="{{ $pais->id}}, {{ $pais->nombre}}" >
                        {{$pais->nombre}}
                    </option>
                @endforeach()

            </select>

            
</div>
            <div class="form-group col-md-6">
          <label class = "text" for="ciudad">Ciudad</label>
          <select name="ciudad" class="form-control form-gape" id="select-ciudad" value="{{ old('ciudad') }}">
          <option value="" selected disabled>Seleccione una Ciudad</option>
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
        <button class="btn-form" type="submit" style = "margin:10px; margin-left:127px">Agregar</button> 
    </form>
    <br>
</div>

<div class="table-responsive">
  <table class="table">
  <thead class="text" style="background:#B0C4D9">
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
  <tbody class="text" style="background:#EFE6E6">
      @foreach($admins as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->institucion}}</td>
      
      <td>{{$item->getRoleNames()}}</td>
      <td>{{$item->pais}}</td>
      <td>{{$item->ciudad}}</td>
      <td>{{$item->region}}</td>
      <td>
        <a href="{{ route('admin.editar', $item) }}" class="btn" style="background: #486A8C;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16" style="color:#EFE6E6">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
          </svg>
        </a>
        
        
        <form action="{{ route('admin.eliminar', $item)}}" method="POST" class="d-inline">
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
<script src="{{ asset('js/add.js')}}" ></script>
@endsection