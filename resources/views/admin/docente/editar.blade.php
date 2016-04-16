@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/nosotros','Nosotros')!!} /
            {!! link_to_route('gestion.docente.index',' Plana docente')!!} / Editar
        </h3>
    </div>
    <br>
    {!! Form::model($Registro, ['route' => ['gestion.docente.update', $Registro->COD_DOCENTE ], 'method' => 'PUT', 'files' => true]) !!}
    <div class="well wbSeccion">
        <p class="wbSubtitulo">Información personal</p>
        <div class="form-group">
            {!! Form::label('DES_NOMBRE', 'Nombres:') !!}
            {!! Form::text('DES_NOMBRE', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_APELLIDO', 'Apellidos:') !!}
            {!! Form::text('DES_APELLIDO', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_EMAIL', 'Correo electrónico:') !!}
            {!! Form::text('DES_EMAIL', null , ['class' => 'form-control wbText']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('DES_NIVEL', 'Nivel:') !!}
            {!! Form::select('DES_NIVEL',$Niveles, null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('IND_TIPO', 'Tipo:') !!}
            {!! Form::select('IND_TIPO',$Tipo, null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('IMAGEN', 'Foto:') !!}
            {!! Form::file('IMAGEN' , ['class' => 'form-control form-image']) !!}
            {!! Form::hidden('IMG_FOTO', null) !!}
            <small><a href="" id="IMG_ANTERIOR" target="_blank">Ver imágen actual</a></small>
        </div>
        <br>
        <p class="wbSubtitulo">Redes sociales</p>
        <div class="form-group">
            {!! Form::label('ENL_WEB', 'Web:') !!}
            {!! Form::text('ENL_WEB', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ENL_LINKEDIN', 'LinkedIn:') !!}
            {!! Form::text('ENL_LINKEDIN', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ENL_FACEBOOK', 'Facebook:') !!}
            {!! Form::text('ENL_FACEBOOK', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ENL_TWITER', 'Twitter:') !!}
            {!! Form::text('ENL_TWITER', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ENL_YOUTUBE', 'Youtube:') !!}
            {!! Form::text('ENL_YOUTUBE', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('IND_ESTADO', 'Estado:') !!}
            {!! Form::select('IND_ESTADO', array('A' => 'Activo', 'I' => 'Inactivo'), null , ['class' => 'form-control wbText']) !!}
        </div>
    </div>
    <div class="well wbSeccion">
        {!! Form::submit('Guardar', array('class' => 'btn btn-success wbbtn','id' => 'btnGuardar')) !!}
    </div>
    {!! Form::close() !!}
    <div class="well wbSeccion">
        {!! Form::open(['route' => ['gestion.docente.destroy', $Registro->COD_DOCENTE ], 'method' => 'DELETE']) !!}
        {!! Form::submit('Eliminar', array('class' => 'btn btn-danger wbbtn')) !!}
        {!! Form::close() !!}
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#IMG_ANTERIOR').attr('href', RutaImagen + $('input[name=IMG_FOTO]').val())
        });
    </script>
@stop

