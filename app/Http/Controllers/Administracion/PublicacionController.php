<?php

namespace EPIS_UPT\Http\Controllers\Administracion;

use EPIS_UPT\Http\Utils\Bitacora;
use EPIS_UPT\Http\Utils\Imagenes;
use EPIS_UPT\Http\Utils\Utilidades;
use EPIS_UPT\Publicacion;
use Illuminate\Http\Request;

use EPIS_UPT\Http\Requests;
use EPIS_UPT\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class PublicacionController extends Controller
{
    /** Sección Publicación */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos = Publicacion::where('DES_TIPO', '=', 'PUBL')->orderBy('FEC_REGISTRO', 'DESC')->paginate(20);
        return view('admin.publicacion.index', compact('Datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publicacion.crear');
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
        $Registro['IMG_PORTADA'] = Imagenes::Subir(Utilidades::MapearArchivo($request['IMAGEN']), '300', '240', 'default-image.png');
        $Registro['DES_TIPO'] = 'PUBL';
        $Registro = Bitacora::crear($Registro);
        Publicacion::create($Registro);
        Flash::success('Se ha creado correctamente el registro.');
        return redirect()->route('gestion.publicacion.index');
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
        $Datos = Publicacion::find($id);
        return view('admin.publicacion.editar', ['Registro' => $Datos]);
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
        $Registro = Publicacion::find($id);
        $Registro->fill($request->all());
        $Registro['IMG_PORTADA'] = Imagenes::Modificar(Utilidades::MapearArchivo($request['IMAGEN']), '300', '240', $Registro['IMG_PORTADA']);
        $Registro = Bitacora::modificar($Registro);
        $Registro->save();
        Flash::success('Se ha modificado correctamente el registro.');
        return redirect()->route('gestion.publicacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imagenes::Eliminar(Publicacion::find($id)['IMG_PORTADA']);
        Publicacion::destroy($id);
        Flash::success('Se ha eliminado correctamente el registro.');
        return redirect()->route('gestion.publicacion.index');
    }
}
