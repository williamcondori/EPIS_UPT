@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/acreditacion','Acreditación')!!} /
            {!! link_to_route('gestion.comite.index','Comités')!!} / Editar
        </h3>
    </div>
    <br>
    {!! Form::model($Registro, ['route' => ['gestion.comite.update', $Registro->COD_COMITE ], 'method' => 'PUT', 'files' => true]) !!}
    <div class="well wbSeccion">
        <div class="form-group">
            {!! Form::label('DES_NOMBRE', 'Nombre:') !!}
            {!! Form::text('DES_NOMBRE', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_RESENA', 'Reseña:') !!}
            {!! Form::textarea('DES_RESENA', null , ['class' => 'form-control wbTextArea']) !!}
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
        {!! Form::open(['route' => ['gestion.comite.destroy', $Registro->COD_COMITE ], 'method' => 'DELETE']) !!}
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

