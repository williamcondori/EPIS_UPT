@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/documentos','Documentos')!!} / 
            {!! link_to_route('gestion.documentoestudiante.index','Documentos para los estudiantes')!!} / Crear
        </h3>
    </div>
<br>
    {!! Form::open(['route' => 'gestion.documentoestudiante.store', 'method' => 'POST', 'files' => true]) !!}
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
        </div>
    </div>
    <div class="well wbSeccion">
        {!! Form::submit('Guardar', array('class' => 'btn btn-success wbbtn','id' => 'btnGuardar')) !!}
    </div>
    {!! Form::close() !!}
@stop
@section('scripts')
@stop
