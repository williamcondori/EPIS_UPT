@extends('layouts.admin')
@section('content')
    <div><h3>Usuarios</h3></div>
    <br>
    <div class="well wbSeccion">
        {!! link_to_route('gestion.usuario.create', $title = 'Crear', $parameters = [], $attributes = ['class' => 'btn btn-primary wbbtn']) !!}
    </div>
    <div class="well wbSeccion">
        <div class="table-responsive">
            <table class="table table-hover wbTable">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>

                    <th>Fecha de creación</th>
                    <th>Operación</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Datos as $Registro)
                    @if($Registro->DES_USUARIO != "WEBMASTER")
                        <tr>
                            <td>{{$Registro->DES_NOMBRE}}</td>
                            <td>{{$Registro->DES_APELLIDO}}</td>
                            <td>{{$Registro->FEC_REGISTRO}}</td>
                            <td>
                                {!! link_to_route('gestion.usuario.edit', $title = 'Editar', $parameters = $Registro->COD_USUARIO, $attributes = ['class' => 'btn btn-default wbbtn']) !!}
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
            {!! $Datos->render() !!}
        </div>
    </div>
@stop