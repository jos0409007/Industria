
<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>x</span>
                </button>
                <h4>Agregar Ciclo Lectivo</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'ciclolectivo.store', 'method'=>'POST'])!!}
                    @include('ciclolectivo.partial.campos')
                     <button type="submit" class="btn btn-primary">Guardar</button>
                 {!! Form::close() !!}

            </div>
          
        </div>
    </div>

</div>
   
