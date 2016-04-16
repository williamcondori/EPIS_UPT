@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/nosotros','Nosotros')!!} /
            {!! link_to_route('gestion.palabra.index','Palabras del director')!!} / Editar
        </h3>
    </div>
    <br>
    {!! Form::model($Registro, ['route' => ['gestion.palabra.update', $Registro->COD_RESENA ], 'method' => 'PUT', 'files' => true]) !!}
    <div class="well wbSeccion">
        <p class="wbSubtitulo">Información del autor</p>
        <div class="form-group">
            {!! Form::label('DES_NOMBRE_AUTOR', 'Nombre:') !!}
            {!! Form::text('DES_NOMBRE_AUTOR', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_DESCRIPCION_AUTOR', 'Cargo:') !!}
            {!! Form::text('DES_DESCRIPCION_AUTOR', null , ['class' => 'form-control wbTextArea']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_RESUMEN_AUTOR', 'Descripción:') !!}
            {!! Form::textarea('DES_RESUMEN_AUTOR', null , ['class' => 'form-control wbTextArea']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('IMAGEN_AUTOR', 'Foto:') !!}
            {!! Form::file('IMAGEN_AUTOR' , ['class' => 'form-control form-image']) !!}
            {!! Form::hidden('IMG_FOTO_AUTOR', null) !!}
            <small><a href="" id="IMG_AUTOR_ANTERIOR" target="_blank">Ver imágen actual</a></small>
        </div>
        <br>
        <p class="wbSubtitulo">Información de la reseña</p>
        <div class="form-group">
            {!! Form::label('DES_TITULO', 'Título:') !!}
            {!! Form::text('DES_TITULO', null , ['class' => 'form-control wbTextArea']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_RESENA', 'Reseña:') !!}
            <div class="text-editor"></div>
            {!! Form::hidden('DES_RESENA', null) !!}
        </div>
        <div class="form-group">
            {!! Form::label('IMAGEN', 'Portada:') !!}
            {!! Form::file('IMAGEN' , ['class' => 'form-control form-image']) !!}
            {!! Form::hidden('IMG_IMAGEN', null) !!}
            <small><a href="" id="IMG_ANTERIOR" target="_blank">Ver imágen actual</a></small>
        </div>
    </div>
    <div class="well wbSeccion">
        {!! Form::submit('Guardar', array('class' => 'btn btn-success wbbtn','id' => 'btnGuardar')) !!}
    </div>
    {!! Form::close() !!}
    <div class="well wbSeccion">
        {!! Form::open(['route' => ['gestion.palabra.destroy', $Registro->COD_RESENA ], 'method' => 'DELETE']) !!}
        {!! Form::submit('Eliminar', array('class' => 'btn btn-danger wbbtn')) !!}
        {!! Form::close() !!}
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#TEXTO').html($('#DES_RESENA').val());
            $('#IMG_ANTERIOR').attr('href', RutaImagen + $('input[name=IMG_IMAGEN]').val());
            $('#IMG_AUTOR_ANTERIOR').attr('href', RutaImagen + $('input[name=IMG_FOTO_AUTOR]').val());
        });
        $('#btnGuardar').click(function () {
            var Contenido = $('#TEXTO').html();
            $('#DES_RESENA').val(Contenido);
        });
    </script>
@stop

