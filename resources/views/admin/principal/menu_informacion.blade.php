@extends('layouts.admin')
@section('content')
    <div>
        <h3>
            Información
        </h3>
    </div><br>
    <div class="well wbSeccion">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="well wbCardNone">
                    <div class="text-center wbicono">
                        <span class="glyphicon glyphicon-edit"></span>
                        <small>
                            {!! link_to_route('gestion.centro.index','Centros de investigación')!!}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop