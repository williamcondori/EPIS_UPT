@extends('layouts.admin')
@section('content')
    <div><h3>Crear</h3></div>
    <br>
    <div class="well wbSeccion">
        {!! link_to_route('gestion.usuario.index', $title = 'Regresar', $parameters = [], $attributes = ['class' => 'btn btn-primary wbbtn']) !!}
    </div>
    {!! Form::open(['route' => 'gestion.usuario.store', 'method' => 'POST', 'files' => true]) !!}
    <div class="well wbSeccion">
        <div class="form-group">
            {!! Form::label('DES_NOMBRE', 'Nombre:') !!}
            {!! Form::text('DES_NOMBRE', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_APELLIDO', 'Apellido:') !!}
            {!! Form::text('DES_APELLIDO', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_EMAIL', 'Correo electrónico:') !!}
            {!! Form::text('DES_EMAIL', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_USUARIO', 'Usuario:') !!}
            {!! Form::text('DES_USUARIO', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_PASSWORD', 'Contraseña') !!}
            {!! Form::password('DES_PASSWORD' , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('IMAGEN', 'Foto:') !!}
            {!! Form::file('IMAGEN' , ['class' => 'form-control wbText']) !!}
        </div>
    </div>
    <div class="well wbSeccion">
            {!! Form::submit('Guardar', array('class' => 'btn btn-success wbbtn')) !!}
    </div>
    {!! Form::close() !!}
@stop