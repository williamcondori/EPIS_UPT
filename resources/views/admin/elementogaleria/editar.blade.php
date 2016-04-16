@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/actividades','Actividades')!!} /
            {!! link_to_route('gestion.galeria.index','Galeria de fotos')!!} /
            {!! link_to_route('gestion.galeria.detail.index', $Cabecera->DES_TITULO, $Cabecera->COD_PUBLICACION )!!} / Editar
        </h3>
    </div>
    <br>
    {!! Form::model($Registro, ['route' => ['gestion.elementogaleria.update', $Registro->COD_ELEMENTO_X_PUBLICACION ], 'method' => 'PUT', 'files' => true]) !!}
    <div class="well wbSeccion">
        {!! Form::hidden('COD_PUBLICACION') !!}
        <div class="form-group">
            {!! Form::label('DES_TITULO', 'Título:') !!}
            {!! Form::text('DES_TITULO', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('IMAGEN', 'Foto:') !!}
            {!! Form::file('IMAGEN' , ['class' => 'form-control form-image']) !!}
            {!! Form::hidden('IMG_IMAGEN', null) !!}
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
        {!! Form::open(['route' => ['gestion.elementogaleria.destroy', $Registro->COD_ELEMENTO_X_PUBLICACION ], 'method' => 'DELETE']) !!}
        {!! Form::submit('Eliminar', array('class' => 'btn btn-danger wbbtn')) !!}
        {!! Form::close() !!}
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#IMG_ANTERIOR').attr('href', RutaImagen + $('input[name=IMG_IMAGEN]').val())
        });
    </script>
@stop

