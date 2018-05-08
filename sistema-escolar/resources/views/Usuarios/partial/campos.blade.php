<div class="form-group">
    {!! Form::label('Nombre completo', 'Nombre', ['for'=>'Nombre']) !!}
    {!! Form::text('Nombre', null , ['class' => 'form-control', 'name' =>'Nombre', 'placeholder' => 'Nombre completo'])!!}   
</div>
<div class="form-group">
        {!! Form::label('Correo electrónico', 'Correo electrónico', ['for'=>'email']) !!}
        {!! Form::email('Correo electrónico', null , ['class' => 'form-control', 'name' =>'email', 'placeholder' => 'Correo electrónico'])!!}      
</div>
<div class="form-group">
        {!! Form::label('Contraseña', 'Contraseña', ['for'=>'pass']) !!}
        {!! Form::password('Contraseña', null , ['class' => 'form-control', 'name' =>'pass', 'placeholder' => 'Contraseña'])!!}      
</div>
<div class="form-group">
        {!! Form::label('Repetir contraseña', 'Repetir contraseña', ['for'=>'pass2']) !!}
        {!! Form::password('Repetir contraseña', null , ['class' => 'form-control', 'name' =>'pass2', 'placeholder' => 'Repetir contraseña'])!!}      
</div>
    