@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            Actividades
        </h3>
    </div><br>
    <div class="well wbSeccion">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.noticia.index','Noticias')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.evento.index','Eventos')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.comunicado.index','Comunicados')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.actualidad.index','Actualidades')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.publicacion.index','Publicaciones')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.galeria.index','Galería de fotos')!!}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop