<div class="form-group">
    {!! Form::label('Nombre', 'Nombre', ['for'=>'name']) !!}
    {!! Form::text('name', null , ['class' => 'form-control', 'name' =>'name', 'placeholder' => 'Nombre'])!!}   
</div>
<div class="form-group">
        {!! Form::label('Slug', 'Slug', ['for'=>'slug']) !!}
        {!! Form::text('slug', null , ['class' => 'form-control', 'name' =>'slug', 'placeholder' => 'Slug'])!!}      
</div>
<div class="form-group">
    {!! Form::label('Descripción', 'Descripcion', ['for'=>'descripcion']) !!}
    {!! Form::text('description', null , ['class' => 'form-control', 'name' =>'description', 'placeholder' => 'Descripción'])!!}      
</div>
<hr>