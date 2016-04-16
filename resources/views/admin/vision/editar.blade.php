@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/nosotros','Nosotros')!!} /
            {!! link_to_route('gestion.vision.index','Visión')!!} / Editar
        </h3>
    </div>
    <br>
    {!! Form::model($Registro, ['route' => ['gestion.vision.update', $Registro->COD_LISTA ], 'method' => 'PUT', 'files' => true]) !!}
    <div class="well wbSeccion">
        <div class="form-group">
            {!! Form::label('DES_TITULO', 'Contenido:') !!}
            {!! Form::textarea('DES_TITULO', null , ['class' => 'form-control wbTextArea']) !!}
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
        {!! Form::open(['route' => ['gestion.vision.destroy', $Registro->COD_LISTA ], 'method' => 'DELETE']) !!}
        {!! Form::submit('Eliminar', array('class' => 'btn btn-danger wbbtn')) !!}
        {!! Form::close() !!}
    </div>
@stop

