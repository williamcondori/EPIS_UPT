@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            Documentos
        </h3>
    </div><br>
    <div class="well wbSeccion">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.documentoestudiante.index','Para los estudiantes')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.documentodocente.index','Para los docentes')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.reglamento.index','Reglamentos')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.directiva.index','Directivas')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.tramite.index','Trámites')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.brochure.index','Brochure')!!}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop