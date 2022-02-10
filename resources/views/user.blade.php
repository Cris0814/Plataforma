
<!-- @extends('plantilla') -->

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
          
          <form action="{{ route('user.eliminar', $item)}}" method="POST" class="d-inline">
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