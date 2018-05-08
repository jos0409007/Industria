

<div class="modal fade" id="update{{ $ciclo->CicloId }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>x</span>
                </button>
                <h4>Agregar usuario</h4>
            </div>
            @foreach( $cicloLectivo as $ci)
                @if( $ci->CicloId == $ciclo->CicloId)

                    <div class="modal-body">
                        {!! Form::model($ci, ['route'=>['ciclolectivo.update',$ci], 'method'=>'PUT'])!!}
                        @include('ciclolectivo.partial.campos')
                            <button type="submit" class="btn btn-primary">guardar</button>
                        {!! Form::close() !!}
                    </div>
                    @break    
                @endif
            @endforeach
    
    </div>

</div>

