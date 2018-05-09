<div class="form-group">

    <div class="form-group">
        {!! Form::label('Nombre', 'Nombre', ['for'=>'Nombre']) !!}
        {!! Form::text('Nombre', null , ['class' => 'form-control', 'name' =>'Nombre', 'placeholder' => 'Nombre de la asignatura'])!!}
    
    </div>
    
    <div class="form-group">
        {!! Form::label('UnidadValorativa', 'UnidadValorativa', ['for'=>'UnidadValorativa']) !!}
        {!! Form::text('UnidadValorativa', null , ['class' => 'form-control', 'name' =>'UnidadValorativa', 'placeholder' => 'Escribre la unidad valorativa'])!!}
    
    </div>
    <div class="form-group">
        {!! Form::label('EspecialidadId', 'EspecialidadId', ['for' => 'EspecialidadId']) !!}
        <select name="EspecialidadId" id="EspecialidadId" class="form-control">
            @foreach($especialidades as $especialidad)
            <option value={{$especialidad->EspecialidadId}}>{{$especialidad->Nombre}}</option>
            @endforeach
        </select>
    </div>
</div>