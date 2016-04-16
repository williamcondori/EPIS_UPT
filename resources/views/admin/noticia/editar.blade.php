@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/actividades','Actividades')!!} /
            {!! link_to_route('gestion.noticia.index','Noticias')!!} / Editar
        </h3>
    </div>
    <br>
    {!! Form::model($Registro, ['route' => ['gestion.noticia.update', $Registro->COD_PUBLICACION ], 'method' => 'PUT', 'files' => true]) !!}
    <div class="well wbSeccion">
        <div class="form-group">
            {!! Form::label('DES_TITULO', 'Título:') !!}
            {!! Form::text('DES_TITULO', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_RESUMEN', 'Resumen:') !!}
            {!! Form::textarea('DES_RESUMEN', null , ['class' => 'form-control wbTextArea']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_RESENA', 'Reseña:') !!}
            <div class="text-editor"></div>
            {!! Form::hidden('DES_RESENA', null) !!}
        </div>
        <div class="form-group">
            {!! Form::label('IMAGEN', 'Foto:') !!}
            {!! Form::file('IMAGEN' , ['class' => 'form-control form-image']) !!}
            {!! Form::hidden('IMG_PORTADA', null) !!}
            <small><a href="" id="IMG_ANTERIOR" target="_blank">Ver imágen actual</a></small>
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
        {!! Form::open(['route' => ['gestion.noticia.destroy', $Registro->COD_PUBLICACION ], 'method' => 'DELETE']) !!}
        {!! Form::submit('Eliminar', array('class' => 'btn btn-danger wbbtn')) !!}
        {!! Form::close() !!}
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#TEXTO').html($('#DES_RESENA').val());
            $('#IMG_ANTERIOR').attr('href', RutaImagen + $('input[name=IMG_PORTADA]').val())
        });
        $('#btnGuardar').click(function () {
            var Contenido = $('#TEXTO').html();
            $('#DES_RESENA').val(Contenido);
        });
    </script>
@stop

