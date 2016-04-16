@extends('layouts.admin')
@section('content')
    <h3>
        {!!link_to('gestion/actividades','Actividades')!!} / Noticias
    </h3>
    <br>
    <div class="well wbSeccion">
        {!! link_to_route('gestion.noticia.create', $title = 'Crear', $parameters = [], $attributes = ['class' => 'btn btn-primary wbbtn']) !!}
    </div>
    <div class="well wbSeccion">
        <div class="table-responsive">
            <table class="table table-hover wbTable">
                <thead>
                <tr>
                    <th>Título</th>
                    <th>Estado</th>
                    <th>Fecha de creación</th>
                    <th>Operación</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Datos as $Registro)
                        <tr>
                            <td>{{$Registro->DES_TITULO}}</td>
                            <td>
                                @if($Registro->IND_ESTADO == 'A')
                                    <div class="label label-success">Activo</div>
                                @else
                                    <div class="label label-danger">Inactivo</div>
                                @endif
                            </td>
                            <td>{{$Registro->FEC_REGISTRO}}</td>
                            <td>
                                {!! link_to_route('gestion.noticia.edit', $title = 'Editar', $parameters = $Registro->COD_PUBLICACION, $attributes = ['class' => 'btn btn-default wbbtn']) !!}
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
            {!! $Datos->render() !!}
        </div>
    </div>
@stop