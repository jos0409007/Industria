
<div class="modal fade" id="update{{ $especialidad->EspecialidadId }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>x</span>
                </button>
                <h4>Editar</h4>
            </div>
            <div class="modal-body">
                    {!! Form::model($especialidad, ['route'=>['especialidad.update', $especialidad], 'method'=>'PUT'])!!}
                    @include('especialidad.partial.campos')
                    <button type="submit" class="btn btn-success btn-block">guardar</button>
                    {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <input type="submit" value="Guardar" class="btn btn-primary">
            </div>
        </div>
    </div>

</div>
