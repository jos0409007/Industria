
<div class="modal fade" id="update{{ $carrera->CarreraId }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                    <h4>Editar</h4>
                </div>
                <div class="modal-body">
                        {!! Form::model($carrera, ['route'=>['carrera.update', $carrera], 'method'=>'PUT'])!!}
                        @include('carrera.partial.campos')
                        <button type="submit" class="btn btn-success btn-block">guardar</button>
                        {!! Form::close() !!}
                </div>
             
            </div>
        </div>
    
    </div>
