@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            Acreditación
        </h3>
    </div><br>
    <div class="well wbSeccion">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                                {!! link_to_route('gestion.acreditacionescuela.index','Acreditación')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.autoevaluacion.index','Autoevaluación')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.comite.index','Comités')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.objetivoeducacional.index','Objetivos educacionales')!!}
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.resultadoestudiante.index','Resultados del estudiante')!!}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop