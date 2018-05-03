@extends('app')

@section('content')
    {!! Form::open(['route'=>'periodoacademico.store', 'method'=>'POST'])!!}
        @include('periodoAcademico.partial.campos')
        <button type="submit" class="btn btn-success btn-block">guardar</button>
    {!! Form::close() !!}
@endsection

@foreach($periodoAcademico as $periodo)
<tr>
<td class="text-center">{{$periodo->PeriodoId}}</td>
<td class="text-center">{{$periodo->Descripcion}}</td>
<td class="text-center">{{$periodo->Estatus}}</td>
{!! Form::open(['route'=>['periodoacademico.destroy',$periodo->PeriodoId], 'method' => 'DELETE']) !!}

<td class="text-center">
    <button type="submit" class="btn btn-danger btn-xs">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </button>
    <button type="submit">Actualizar</button>
</td>

{!! Form::close() !!}
</tr>
@endforeach


<select name="PeriodoId" id="PeriodoId" class="form-control">
        <option value="" disabled selected>Selecciona un Periodo Academico</option>    
        @foreach($periodos as $periodo)
            <option value={{$periodo->PeriodoId}}> {{$periodo->Descripcion}} </option>
        @endforeach
    </select>



