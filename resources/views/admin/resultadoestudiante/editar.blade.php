@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/acreditacion','Acreditación')!!} / 
            {!! link_to_route('gestion.resultadoestudiante.index','Resultados del estudiante')!!} / Editar
        </h3>
    </div>
    <br>
    {!! Form::model($Registro, ['route' => ['gestion.resultadoestudiante.update', $Registro->COD_LISTA ], 'method' => 'PUT', 'files' => true]) !!}
    <div class="well wbSeccion">
        <div class="form-group">
            {!! Form::label('DES_TITULO', 'Título:') !!}
            {!! Form::text('DES_TITULO', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_CONTENIDO', 'Reseña:') !!}
            {!! Form::textarea('DES_CONTENIDO', null , ['class' => 'form-control wbTextArea']) !!}
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
        {!! Form::open(['route' => ['gestion.resultadoestudiante.destroy', $Registro->COD_LISTA ], 'method' => 'DELETE']) !!}
        {!! Form::submit('Eliminar', array('class' => 'btn btn-danger wbbtn')) !!}
        {!! Form::close() !!}
    </div>
@stop

