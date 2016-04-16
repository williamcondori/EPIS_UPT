@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/documentos','Documentos')!!} / 
            {!! link_to_route('gestion.directiva.index','Directivas')!!} / Editar
        </h3>
    </div>
    <br>
    {!! Form::model($Registro, ['route' => ['gestion.directiva.update', $Registro->COD_DOCUMENTO ], 'method' => 'PUT', 'files' => true]) !!}
    <div class="well wbSeccion">
        <div class="form-group">
            {!! Form::label('DES_NOMBRE', 'Nombre:') !!}
            {!! Form::text('DES_NOMBRE', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_DESCRIPCION', 'Descripción:') !!}
            {!! Form::textarea('DES_DESCRIPCION', null , ['class' => 'form-control wbTextArea']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DOCUMENTO', 'Documento:') !!}
            {!! Form::file('DOCUMENTO' , ['class' => 'form-control form-image']) !!}
            {!! Form::hidden('DES_RUTA', null) !!}
            <small><a href="" id="DCT_ANTERIOR" target="_blank">Ver documento actual</a></small>
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
        {!! Form::open(['route' => ['gestion.directiva.destroy', $Registro->COD_DOCUMENTO ], 'method' => 'DELETE']) !!}
        {!! Form::submit('Eliminar', array('class' => 'btn btn-danger wbbtn')) !!}
        {!! Form::close() !!}
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#DCT_ANTERIOR').attr('href', RutaDocumento + $('input[name=DES_RUTA]').val())
        });
    </script>
@stop

