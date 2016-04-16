@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/actividades','Actividades')!!} /
            {!! link_to_route('gestion.comunicado.index','Comunicados')!!} / Crear
        </h3>
    </div>
<br>
    {!! Form::open(['route' => 'gestion.comunicado.store', 'method' => 'POST', 'files' => true]) !!}
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
