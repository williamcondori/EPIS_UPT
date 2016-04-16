@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            {!!link_to('gestion/acreditacion','Acreditación')!!} /
            {!! link_to_route('gestion.comite.index','Comités')!!} / Crear
        </h3>
    </div>
<br>
    {!! Form::open(['route' => 'gestion.comite.store', 'method' => 'POST', 'files' => true]) !!}
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
        </div>
    </div>
    <div class="well wbSeccion">
        {!! Form::submit('Guardar', array('class' => 'btn btn-success wbbtn','id' => 'btnGuardar')) !!}
    </div>
    {!! Form::close() !!}
@stop
