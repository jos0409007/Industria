<div class="form-group">
       
    @php
        $clave = 0;
    @endphp
    <div class="form-group">
        {!! Form::label('AsignaturaCarreraId', 'AsignaturaCarreraId', ['for'=>'AsignaturaCarreraId']) !!}
        {!! Form::text('AsignaturaCarreraId', null , ['class' => 'form-control', 'name' =>'AsignaturaCarreraId', 'value' => '0' ,'required' => ''])!!}
    </div>

    <div class="form-group">
        {!! Form::label('AsignaturaId', 'AsignaturaId', ['for'=>'AsignaturaId']) !!}
        <select name="AsignaturaId" id="AsignaturaId" class="form-control" required>
            @foreach($asignaturas as $asignatura)
            <option value={{$asignatura->AsignaturaId}}>{{$asignatura->Nombre}}</option>
            @endforeach
        </select>
    </div>
        
       
    <div class="form-group">
        {!! Form::label('CarreraId', 'CarreraId', ['for' => 'CarreraId']) !!}
        <select name="CarreraId" id="CarreraId" class="form-control" required>
            @foreach($carreras as $Carrera)
            <option value={{$Carrera->CarreraId}}>{{$Carrera->Nombre}}</option>
            @endforeach
        </select>
    </div>

    </div>