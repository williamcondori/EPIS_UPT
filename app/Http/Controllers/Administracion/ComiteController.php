<?php

namespace EPIS_UPT\Http\Controllers\Administracion;

use EPIS_UPT\Comite;
use EPIS_UPT\Http\Utils\Bitacora;
use EPIS_UPT\Http\Utils\Imagenes;
use EPIS_UPT\Http\Utils\Utilidades;
use EPIS_UPT\Resena;
use Illuminate\Http\Request;

use EPIS_UPT\Http\Requests;
use EPIS_UPT\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class ComiteController extends Controller
{
    /** Sección Publicación */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos = Comite::orderBy('FEC_REGISTRO', 'DESC')->paginate(20);
        return view('admin.comite.index', compact('Datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comite.crear');
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
        $Registro['IMG_IMAGEN'] = Imagenes::Subir(Utilidades::MapearArchivo($request['IMAGEN']), '300', '240', 'default-image.png');
        $Registro = Bitacora::crear($Registro);
        Comite::create($Registro);
        Flash::success('Se ha creado correctamente el registro.');
        return redirect()->route('gestion.comite.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Datos = Comite::find($id);
        return view('admin.comite.editar', ['Registro' => $Datos]);
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
        $Registro = Comite::find($id);
        $Registro->fill($request->all());
        $Registro['IMG_IMAGEN'] = Imagenes::Modificar(Utilidades::MapearArchivo($request['IMAGEN']), '300', '240', $Registro['IMG_IMAGEN']);
        $Registro = Bitacora::modificar($Registro);
        $Registro->save();
        Flash::success('Se ha modificado correctamente el registro.');
        return redirect()->route('gestion.comite.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imagenes::Eliminar(Comite::find($id)['IMG_IMAGEN']);
        Comite::destroy($id);
        Flash::success('Se ha eliminado correctamente el registro.');
        return redirect()->route('gestion.comite.index');
    }
}