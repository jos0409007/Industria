<div class="form-group">

        {!! Form::label('PeriodoId', 'Periodo Academico', ['for'=>'PeriodoId']) !!}
        <select name="PeriodoId" id="PeriodoId" class="form-control">
            <option value="" disabled selected>Selecciona un periodo Academico</option>
            @foreach( $periodos as $periodo )
            <option value={{$periodo->PeriodoId}}>{{$periodo->Descripcion}}</option>
           
            @endforeach
        </select>
        
        <div class="form-group">
            {!! Form::label('Descripcion', 'Descripcion', ['for'=>'Descripcion']) !!}
            {!! Form::text('Descripcion', null , ['class' => 'form-control', 'name' =>'Descripcion', 'placeholder' => 'Escribre la descripcion del Ciclo'])!!}
       
        </div>

        <div class="form-group">
            {!! Form::label('TipoPeriodo', 'Tipo Periodo', ['for' => 'TipoPeriodo']) !!}
            <select name="TipoPeriodo" id="TipoPeriodo" class="form-control">
                <option value="" disabled selected>Selecciona un Tipo de Periodo</option>
                <option value="Semestral">Semestral</option>
                <option value="Trimestral">Trimestral</option>
            </select>
        </div>

            
    </div>
    