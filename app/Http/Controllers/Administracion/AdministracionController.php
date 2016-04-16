<?php

namespace EPIS_UPT\Http\Controllers\Administracion;

use Illuminate\Http\Request;

use EPIS_UPT\Http\Requests;
use EPIS_UPT\Http\Controllers\Controller;

class AdministracionController extends Controller
{
    public function index()
    {
        return view('admin.principal.principal');
    }
    public function nosotros()
    {
        return view('admin.principal.menu_nosotros');
    }
    public function acreditacion()
    {
        return view('admin.principal.menu_acreditacion');
    }
    public function informacion()
    {
        return view('admin.principal.menu_informacion');
    }
    public function actividades()
    {
        return view('admin.principal.menu_actividad');
    }
    public function documentos()
    {
        return view('admin.principal.menu_documentos');
    }
}
