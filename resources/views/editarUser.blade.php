
 @extends('plantilla')

@section('seccion')

<h1 class="tittle">Editar Docente</h1>
<style>
<?php include 'C:\xampp\htdocs\proyecto\laravel\proyecto\resources\sass\style.css'; ?>
</style>
@error('name')
          <div class="alert alert-danger">
            El Nombre es obligatorio
          </div>
        @enderror

        @error('edad')
          <div class="alert alert-danger">
            La Edad es obligatoria
          </div>
        @enderror

        @error('programa')
          <div class="alert alert-danger">
            El Programa es obligatorio
          </div>
        @enderror
        
        @error('asignatura')
          <div class="alert alert-danger">
            La asignatura es obligatoria
          </div>
        @enderror

        @error('num_estudiante')
          <div class="alert alert-danger">
            El Numero de estudiantes es obligatorio
          </div>
        @enderror

        @error('num_m')
          <div class="alert alert-danger">
            El Numero de mujeres 
          </div>
        @enderror
        @error('num_h')
          <div class="alert alert-danger">
            El Numero de hombres es obligatorio
          </div>
        @enderror
        @error('semestre')
          <div class="alert alert-danger">
            El Semestre es obligatorio
          </div>
        @enderror

        @error('modalidad')
          <div class="alert alert-danger">
            La Modalidad es obligatoria
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
          <label class = "text" for="name">Nombre</label>
          <input type="text" name="name" placeholder="Nombre" class="form-control form-gape" value="{{ $users->name }}" readonly>
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="email">E-mail</label>
          <input type="text" name="email" placeholder="E-mail" class="form-control form-gape" value="{{ $users->email }}" readonly>
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="institucion">Institucion</label>
          
          <select name="institucion" class="form-control form-gape" id="select-institucion" value="{{ $users->institucion }}">
          <option value="" selected disabled>{{ $users->institucion }}</option>

                @foreach($instituciones as $institucion)
                    <option value="{{ $institucion->id}}" >
                        {{$institucion->nombre}}
                    </option>
                @endforeach

            </select>
            

        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="programa">Programa</label>
          <select name="programa" class="form-control form-gape" id="select-programa" value="{{ $users->programa }}">
           </select>
           
</option>
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="edad">Edad</label>
           <select name="edad" class="form-control form-gape" id="edad" value="{{ $users->edad }}">
            <option value="" selected disabled>{{ $users->edad }}</option>
            <option >18</option>
            <option >19</option>
            <option >20</option>
            <option >21</option>
            <option >22</option>
            <option >23</option>
            <option >24</option>
            <option >25</option>
            <option >26</option>
            <option >27</option>
            <option >28</option>
            <option >29</option>
            <option >30</option>
            <option >31</option>
            <option >32</option>
            <option >33</option>
            <option >34</option>
            <option >35</option>
            <option >36</option>
            <option >37</option>
            <option >38</option>
            <option >39</option>
            <option >40</option>
            <option >41</option>
            <option >42</option>
            <option >43</option>
            <option >44</option>
            <option >45</option>
            <option >46</option>
            <option >47</option>
            <option >48</option>
            <option >49</option>
            <option >50</option>
            <option >51</option>
            <option >52</option>
            <option >53</option>
            <option >54</option>
            <option >55</option>
            <option >56</option>
            <option >57</option>
            <option >58</option>
            <option >59</option>
            <option >60</option>
            <option >61</option>
            <option >62</option>
            <option >63</option>
            <option >64</option>
            <option >65</option>
            <option >66</option>
            <option >67</option>
            <option >68</option>
            <option >69</option>
            <option >70</option>
            <option >71</option>
            <option >72</option>
            <option >73</option>
            <option >74</option>
            <option >75</option>
            <option >76</option>
            <option >77</option>
            <option >78</option>
            <option >79</option>
            <option >80</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label class = "text" for="asignatura">Asignatura</label>
          <input type="text" name="asignatura" placeholder="asignatura" class="form-control form-gape" value="{{ $users->asignatura }}">
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="num_estudiante">Numero de estudiantes</label>
          <select name="num_estudiante" class="form-control form-gape" id="num_estudiante" value="{{ $users->num_estudiante }}">
            <option value="" selected disabled>{{ $users->num_estudiante }}</option>
            <option >10-20</option>
            <option >21-30</option>
            <option >31-40</option>
            <option >41-50</option>
            <option >51-60</option>
            <option >Mas de 60</option>
            
          </select>
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="num_m">Numero de Mujeres </label>
          <input type="number" name="num_m" placeholder="numero mujeres"class="form-control form-gape" id="num_m" value="{{ $users->num_m }}">
                  
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="num_h">Numero de Hombres </label>
          <input type="number" name="num_h" placeholder="numero hombres"class="form-control form-gape" id="num_h" value="{{ $users->num_h }}">
                  
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="semestre">Semestre</label>
          <select name="semestre" class="form-control form-gape" id="semestre" value="{{ $users->semestre }}">
            <option value="" selected disabled>{{ $users->semestre }}</option>
            <option >I</option>
            <option >II</option>
            <option >III</option>
            <option >IV</option>
            <option >V</option>
            <option >VI</option>
            <option >VII</option>
            <option >VIII</option>
            <option >IX</option>
            <option >X</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label class = "text" for="modalidad">Modalidad</label>
          <select name="modalidad" class="form-control form-gape" id="modalidad" value="{{ $users->modalidad }}">
            <option value="" selected disabled>{{ $users->modalidad }}</option>
            <option >Virtual</option>
            <option >A distancia</option>
            <option >Presencial</option>
            <option >Dual</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <br>
          <button class="btn-form" type="submit" style = "margin:10px; margin-left:127px">Guardar</button> 
        </div>
      </div>
    </form>

    <script src="{{ asset('js/edit.js')}}" ></script>
@endsection 

