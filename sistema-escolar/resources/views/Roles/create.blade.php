<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>x</span>
                </button>
                <h4>Agregar rol</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'rol.store', 'method'=>'POST'])!!}
                    @include('roles.partial.campos')
                    <button type="submit" class="btn btn-primary">Guardar</button>
                {!! Form::close() !!}
            </div>

        </div>
    </div>

</div>