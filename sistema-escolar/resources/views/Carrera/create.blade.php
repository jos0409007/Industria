<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>x</span>
                </button>
                <h4>Carrera</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'carrera.store', 'method'=>'POST'])!!}
                    @include('carrera.partial.campos')
                        <button type="submit" class="btn btn-primary">Guardar</button>
                {!! Form::close() !!}

            </div>
            
        </div>
    </div>

</div>
    
