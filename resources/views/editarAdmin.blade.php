@extends('plantilla')

@section('seccion')
<h1>Editar Admin</h1>
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
            El Numero de estudiante es obligatorio
          </div>
        @enderror

        @error('num_m_h')
          <div class="alert alert-danger">
            El Numero de mujeres y hombres es obligatorio
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
<form action="{{ route('admin.update', $users->id) }}" method="POST">
@method('PUT')      
@csrf

      <div class="row">
        <div class="form-group col-md-6">
          <label for="name">Nombre</label>
          <input type="text" name="name" placeholder="Nombre" class="form-control" value="{{ $users->name }}" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="email">E-mail</label>
          <input type="text" name="email" placeholder="E-mail" class="form-control" value="{{ $users->email }}" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="edad">Edad</label>
           <select name="edad" class="form-control" id="edad" value="{{ $users->edad }}">
            <option value="" selected disabled>Seleccione una opción</option>
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
          <label for="programa">Programa</label>
          <select name="programa" class="form-control" id="programa" value="{{ $users->programa }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="asignatura">Asignatura</label>
          <select name="asignatura" class="form-control" id="asignatura" value="{{ $users->asignatura }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Opcion1</option>
            <option >Opcion2</option>
            <option >Opcion3</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="num_estudiante">Numero de estudiantes</label>
          <select name="num_estudiante" class="form-control" id="num_estudiante" value="{{ $users->num_estudiante }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >1</option>
            <option >2</option>
            <option >3</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="num_m_h">Numero de Mujeres y Hombres</label>
          <select name="num_m_h" class="form-control" id="num_m_h" value="{{ $users->num_m_h }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >1</option>
            <option >2</option>
            <option >3</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="semestre">Semestre</label>
          <select name="semestre" class="form-control" id="semestre" value="{{ $users->semestre }}">
            <option value="" selected disabled>Seleccione una opción</option>
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
          <label for="modalidad">Modalidad</label>
          <select name="modalidad" class="form-control" id="modalidad" value="{{ $users->modalidad }}">
            <option value="" selected disabled>Seleccione una opción</option>
            <option >Virtual</option>
            <option >Presencial</option>
            <option >Semipresencial</option>
          </select>
        </div>
        <br>
        <br>
        <br>
        <button class="btn btn-warning btn-block" type="submit">Editar</button> 
      </div>
    </form>
@endsection 