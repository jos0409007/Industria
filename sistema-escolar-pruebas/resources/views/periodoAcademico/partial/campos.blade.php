<div class="form-group">
    {!! Form::label('Descripcion', 'Descripcion', ['for'=>'Descripcion']) !!}
    {!! Form::text('Descripcion' , ['class' => 'form-control', 'id' => 'Descripcion', 'name' =>'Descripcion', 'placeholder' => 'Escribre la descripcion del periodo'])!!}
    
</div>

<div class="form-group">
    {!! Form::label('Estatus', 'Estatus', ['for'=>'Estatus'])!!}
   <select name="Estatus" id="Estatus" class="form-control">
       <option value="" disabled selected>Elige un estatus</option>
       <option value="Activo">Activo</option>
       <option value="Inactivo">Inactivo</option>
   </select>
</div>
