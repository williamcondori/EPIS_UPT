@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/acreditacion','Acreditación')!!} / 
            {!! link_to_route('gestion.autoevaluacion.index','Autoevaluación')!!} / Crear
        </h3>
    </div>
<br>
    {!! Form::open(['route' => 'gestion.autoevaluacion.store', 'method' => 'POST', 'files' => true]) !!}
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
        </div>
    </div>
    <div class="well wbSeccion">
        {!! Form::submit('Guardar', array('class' => 'btn btn-success wbbtn','id' => 'btnGuardar')) !!}
    </div>
    {!! Form::close() !!}
@stop
@section('scripts')
    <script type="text/javascript">
        $('#btnGuardar').click(function () {
            var Contenido = $('#TEXTO').html();
            $('#DES_RESENA').val(Contenido);
        });
    </script>
@stop
