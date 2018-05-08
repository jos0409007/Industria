<div class="form-group">

        {!! Form::label('CicloId', 'Ciclo Lectivo', ['for'=>'CicloId']) !!}
        <select name="CicloId" id="CicloId" class="form-control">
            <option value="" disabled selected>Selecciona un ciclo lectivo</option>
            @foreach( $ciclos as $ciclo )
            <option value={{$ciclo->CicloId}}>{{$ciclo->Descripcion}}</option>
           
            @endforeach
        </select>
        
        <div class="form-group">
            {!! Form::label('Descripcion', 'Descripcion', ['for'=>'Descripcion']) !!}
            {!! Form::text('Descripcion', null , ['class' => 'form-control', 'name' =>'Descripcion', 'placeholder' => 'Escribre la descripcion del Ciclo'])!!}
       
        </div>


        <div class="form-gorup">
            {!! Form::label('FechaInicio', 'Fecha Inicio', ['for' => 'FechaInicio']) !!}
            {!! Form::date('FechaInicio', null, ['class' => 'form-control', 'name' => 'FechaInicio']) !!}
        </div>

        <div class="form-gorup">
            {!! Form::label('FechaFin', 'Fecha Fin', ['for' => 'FechaFin']) !!}
            {!! Form::date('FechaFin', null, ['class' => 'form-control', 'name' => 'FechaFin']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('Estatus', 'Estatus', ['for' => 'Estatus']) !!}
            {!! Form::select('Estatus', ['Activo' => 'Activo', 
                'Inactivo' => 'Inactivo'], null, 
                ['placeholder' => 'Selecciona un Estatus', 'class' => 'form-control', 'name' => 'Estatus'])
             !!}  
        </div>
    </div>
    