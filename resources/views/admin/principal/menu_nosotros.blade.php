@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            Nosotros
        </h3>
    </div><br>
    <div class="well wbSeccion">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.presentacion.index','Presentacion')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.palabra.index','Palabras del director')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.mision.index','Misión')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.vision.index','Visión')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.objetivo.index','Objetivos')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.perfil.index','Perfiles profesionales')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.docente.index','Plana Docente')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.infraestructura.index','Infraestructuras')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.servicio.index','Servicios')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.proyecto.index','Proyectos')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.convenio.index','Convenios')!!}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop