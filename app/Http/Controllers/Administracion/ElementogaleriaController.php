<?php

namespace EPIS_UPT\Http\Controllers\Administracion;

use EPIS_UPT\ElementoPublicacion;
use EPIS_UPT\Http\Utils\Bitacora;
use EPIS_UPT\Http\Utils\Imagenes;
use EPIS_UPT\Http\Utils\Utilidades;
use EPIS_UPT\Publicacion;
use Illuminate\Http\Request;

use EPIS_UPT\Http\Requests;
use EPIS_UPT\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class ElementogaleriaController extends Controller
{
    /** Sección Publicación */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $Datos = Publicacion::where('COD_PUBLICACION',$id)->with('Elementos')->get()->first();
        return view('admin.elementogaleria.index', compact('Datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Datos = Publicacion::where('COD_PUBLICACION',$id)->with('Elementos')->get()->first();
        return view('admin.elementogaleria.crear', compact('Datos'));
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
        ElementoPublicacion::create($Registro);
        Flash::success('Se ha creado correctamente el registro.');
        return redirect()->route('gestion.galeria.detail.index',$Registro['COD_PUBLICACION']);
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
        $Detalle = ElementoPublicacion::find($id);
        $Cabecera = Publicacion::where('COD_PUBLICACION',$Detalle['COD_PUBLICACION'])->first();
        return view('admin.elementogaleria.editar', ['Registro' => $Detalle,'Cabecera' => $Cabecera]);
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
        $Registro = ElementoPublicacion::find($id);
        $Registro->fill($request->all());
        $Registro['IMG_IMAGEN'] = Imagenes::Modificar(Utilidades::MapearArchivo($request['IMAGEN']), '300', '240', $Registro['IMG_IMAGEN']);
        $Registro = Bitacora::modificar($Registro);
        $Registro->save();
        Flash::success('Se ha modificado correctamente el registro.');
        return redirect()->route('gestion.galeria.detail.index',$Registro['COD_PUBLICACION']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Registro = ElementoPublicacion::find($id);
        Imagenes::Eliminar($Registro['IMG_IMAGEN']);
        ElementoPublicacion::destroy($id);
        Flash::success('Se ha eliminado correctamente el registro.');
        return redirect()->route('gestion.galeria.detail.index',$Registro['COD_PUBLICACION']);
    }
}