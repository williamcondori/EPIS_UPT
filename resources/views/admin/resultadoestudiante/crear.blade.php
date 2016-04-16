@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/acreditacion','Acreditación')!!} / 
            {!! link_to_route('gestion.resultadoestudiante.index','Resultados del estudiante')!!} / Crear
        </h3>
    </div>
<br>
    {!! Form::open(['route' => 'gestion.resultadoestudiante.store', 'method' => 'POST', 'files' => true]) !!}
    <div class="well wbSeccion">
        <div class="form-group">
            {!! Form::label('DES_TITULO', 'Título:') !!}
            {!! Form::text('DES_TITULO', null , ['class' => 'form-control wbText']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('DES_CONTENIDO', 'Reseña:') !!}
            {!! Form::textarea('DES_CONTENIDO', null , ['class' => 'form-control wbTextArea']) !!}
        </div>
    </div>
    <div class="well wbSeccion">
        {!! Form::submit('Guardar', array('class' => 'btn btn-success wbbtn','id' => 'btnGuardar')) !!}
    </div>
    {!! Form::close() !!}
@stop
