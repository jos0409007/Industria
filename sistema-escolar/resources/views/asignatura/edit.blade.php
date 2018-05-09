<div class="modal fade" id="update{{ $c->AsignaturaId }}">
    @foreach($asignaturas as $asignatura)
        @if( $c->AsignaturaId == $asignatura->AsignaturaId)
            @php
                $asig = $asignatura;
            @endphp
        @endif
    @endforeach
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                    <h4>Editar Asignatura</h4>
                </div>
       
                <div class="modal-body">
                    {!! Form::model($asig, ['route'=>['asignatura.update',$asig], 'method'=>'PUT'])!!}
                    @include('asignatura.partial.campos')
                        <button type="submit" class="btn btn-primary">guardar</button>
                    {!! Form::close() !!}
                </div>
            
    
        </div>
    
    </div>
    