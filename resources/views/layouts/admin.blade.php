<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/bootstrap-texteditor.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/fileinput.min.css')!!}
    {!!Html::style('css/bootstrap-datetimepicker.min.css')!!}
    {!!Html::style('css/Estilos.css')!!}
 </head>
 <body>
 <div class="container-fluid">
    <div class="row">
            <div class="well wbCabecera">
                 <span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;Gestión del Contenido
            </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="well wbCard">
                <h4><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Página web</h4><br>
                <ul class="nav nav-pills nav-stacked wbMenulista">
                    <li role="presentation">{!!link_to('gestion','Inicio')!!}</li>
                   <li role="presentation">{!!link_to('gestion/nosotros','Nosotros')!!}</li>
                   <li role="presentation">{!!link_to('gestion/acreditacion','Acreditacion')!!}</li>
                   <li role="presentation">{!!link_to('gestion/informacion','Información')!!}</li>
                   <li role="presentation">{!!link_to('gestion/actividades','Actividades')!!}</li>
                   <li role="presentation">{!!link_to('gestion/planestudio','Plan de estudios')!!}</li>
                   <li role="presentation">{!!link_to('gestion/documentos','Documentos')!!}</li>
               </ul>
           </div>
           <div class="well wbCard">
               <h4><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Administración</h4><br>
               <ul class="nav nav-pills nav-stacked wbMenulista">
                   <li role="presentation"><a href="#">Buzón</a></li>
                   <li role="presentation"><a href="#">Datos</a></li>
                   <li role="presentation"><a href="#">Configuración</a></li>
               </ul>
           </div>
       </div>
       <div class="col-md-7">
           <div class="well wbCard">
               @include('flash::message')
               @yield('content')
           </div>
       </div>
       <div class="col-md-2">
           <div class="well wbCard">
               <h4><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Más</h4><br>
               <ul class="nav nav-pills nav-stacked wbMenulista">
                   <li role="presentation"><a href="http://sistemupt.azurewebsites.net/" target="_blank">Vista previa</a></li>
               </ul>
           </div>
       </div>
   </div>
</div>
 {!!Html::script('js/jquery.min.js')!!}
 {!!Html::script('js/bootstrap.min.js')!!}
 {!!Html::script('js/editor.js')!!}
 {!!Html::script('js/moment-with-locales.js')!!}
 {!!Html::script('js/bootstrap-datetimepicker.min.js')!!}
 {!!Html::script('js/fileinput.min.js')!!}
 {!!Html::script('js/Scripts.js')!!}
 @yield('scripts')
</body>
</html>