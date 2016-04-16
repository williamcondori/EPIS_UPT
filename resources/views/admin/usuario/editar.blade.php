@extends('layouts.admin')
@section('content')
    <div><h3>Editar</h3></div>
    <br>
    <div class="well wbSeccion">
        {!! link_to_route('gestion.usuario.index', $title = 'Regresar', $parameters = [], $attributes = ['class' => 'btn btn-primary wbbtn']) !!}
    </div>
    {!! Form::model($Registro, ['route' => ['gestion.usuario.update', $Registro->COD_USUARIO ], 'method' => 'PUT']) !!}
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
            {!! Form::label('IMG_FOTO', 'Foto:') !!}
            {!! Form::text('IMG_FOTO', null , ['class' => 'form-control wbText']) !!}
        </div>
    </div>
    <div class="well wbSeccion">
        {!! Form::submit('Guardar', array('class' => 'btn btn-success wbbtn')) !!}
    </div>
    {!! Form::close() !!}
    <div class="well wbSeccion">
    {!! Form::open(['route' => ['gestion.usuario.destroy', $Registro->COD_USUARIO ], 'method' => 'DELETE']) !!}
        {!! Form::submit('Eliminar', array('class' => 'btn btn-danger wbbtn')) !!}
    {!! Form::close() !!}
    </div>
@stop