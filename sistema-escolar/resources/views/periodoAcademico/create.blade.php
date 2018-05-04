
       
<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>x</span>
                </button>
                <h4>Agregar periodoAcademico</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'periodoacademico.store', 'method'=>'POST'])!!}
                    @include('periodoAcademico.partial.campos')
                    <button type="submit" class="btn btn-primary">guardar</button>
                {!! Form::close() !!}
        
            </div>
          
        </div>
    </div>

</div>