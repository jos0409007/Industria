
<div class="modal fade" id="update{{ $parcial->ParcialId }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                    <h4>Editar</h4>
                </div>
                @foreach( $parciales as $pa)
                    @if( $pa->ParcialId == $parcial->ParcialId)
    
                        <div class="modal-body">
                            {!! Form::model($pa, ['route'=>['parcial.update',$pa], 'method'=>'PUT'])!!}
                            @include('parcial.partial.campos')
                                <button type="submit" class="btn btn-primary">guardar</button>
                            {!! Form::close() !!}
                        </div>
                        @break    
                    @endif
                @endforeach
        
        </div>
    
    </div>
    