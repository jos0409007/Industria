<div class="form-group">
    {!! Form::label('Nombre completo', 'Nombre', ['for'=>'name']) !!}
    {!! Form::text('name', null , ['class' => 'form-control', 'name' =>'name', 'placeholder' => 'Nombre completo'])!!}   
</div>
<div class="form-group">
        {!! Form::label('Correo electrónico', 'Correo electrónico', ['for'=>'email']) !!}
        {!! Form::email('email', null , ['class' => 'form-control', 'name' =>'email', 'placeholder' => 'Correo electrónico'])!!}      
</div>
<hr>


    