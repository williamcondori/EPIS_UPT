@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/nosotros','Nosotros')!!} /
            {!! link_to_route('gestion.mision.index','Misión')!!} / Crear
        </h3>
    </div>
<br>
    {!! Form::open(['route' => 'gestion.mision.store', 'method' => 'POST', 'files' => true]) !!}
    <div class="well wbSeccion">
        <div class="form-group">
            {!! Form::label('DES_TITULO', 'Contenido:') !!}
            {!! Form::textarea('DES_TITULO', null , ['class' => 'form-control wbTextArea']) !!}
        </div>
    </div>
    <div class="well wbSeccion">
        {!! Form::submit('Guardar', array('class' => 'btn btn-success wbbtn','id' => 'btnGuardar')) !!}
    </div>
    {!! Form::close() !!}
@stop
