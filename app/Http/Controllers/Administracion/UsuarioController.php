<?php

namespace EPIS_UPT\Http\Controllers\Administracion;

use EPIS_UPT\Http\Utils\Imagenes;
use Illuminate\Http\Request;
use EPIS_UPT\Usuario;
use EPIS_UPT\Http\Requests;
use EPIS_UPT\Http\Utils\Bitacora;
use EPIS_UPT\Http\Utils\Utilidades;
use EPIS_UPT\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos = Usuario::orderBy('FEC_REGISTRO', 'DESC')->paginate(20);
        return view('admin.usuario.index', compact('Datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuario.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Registro = $request->all();
        $Registro['DES_PASSWORD'] = Utilidades::EstablecerPassword($Registro['DES_PASSWORD']);
        $Registro['IMG_FOTO'] = Imagenes::SubirImagen(Utilidades::MapearArchivo($request['IMAGEN']), '300', '300', 'default-user.png');
        $Registro = Bitacora::crear($Registro);
        Usuario::create($Registro);
        Flash::success('Se ha creado correctamente el registro.');
        return redirect()->route('gestion.usuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Datos = Usuario::find($id);
        return view('admin.usuario.editar', ['Registro' => $Datos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Registro = Usuario::find($id);
        $Password = $Registro['DES_PASSWORD'];
        $Registro->fill($request->all());
        $Registro['DES_PASSWORD'] = Utilidades::ActualizarPassword($Registro['DES_PASSWORD'], $Password);
        $Registro = Bitacora::modificar($Registro);
        $Registro->save();
        Flash::success('Se ha modificado correctamente el registro.');
        return redirect()->route('gestion.usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        Flash::success('Se ha eliminado correctamente el registro.');
        return redirect()->route('gestion.usuario.index');
    }
}
