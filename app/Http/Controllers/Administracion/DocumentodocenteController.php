<?php

namespace EPIS_UPT\Http\Controllers\Administracion;

use EPIS_UPT\Http\Utils\Bitacora;
use EPIS_UPT\Http\Utils\Documentos;
use EPIS_UPT\Http\Utils\Utilidades;
use EPIS_UPT\Documento;
use Illuminate\Http\Request;

use EPIS_UPT\Http\Requests;
use EPIS_UPT\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class DocumentodocenteController extends Controller
{
    /** Sección Publicación */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos = Documento::where('DES_TIPO', '=', 'DOCE')->orderBy('FEC_REGISTRO', 'DESC')->paginate(20);
        return view('admin.documentodocente.index', compact('Datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.documentodocente.crear');
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
        $Registro['DES_RUTA'] = Documentos::Subir(Utilidades::MapearArchivo($request['DOCUMENTO']), '#');
        $Registro['DES_TIPO'] = 'DOCE';
        $Registro = Bitacora::crear($Registro);
        Documento::create($Registro);
        Flash::success('Se ha creado correctamente el registro.');
        return redirect()->route('gestion.documentodocente.index');
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
        $Datos = Documento::find($id);
        return view('admin.documentodocente.editar', ['Registro' => $Datos]);
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
        $Registro = Documento::find($id);
        $Registro->fill($request->all());
        $Registro['DES_RUTA'] = Documentos::Subir(Utilidades::MapearArchivo($request['DOCUMENTO']), $Registro['DES_RUTA']);
        $Registro = Bitacora::modificar($Registro);
        $Registro->save();
        Flash::success('Se ha modificado correctamente el registro.');
        return redirect()->route('gestion.documentodocente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Documentos::Eliminar(Documento::find($id)['DES_RUTA']);
        Documento::destroy($id);
        Flash::success('Se ha eliminado correctamente el registro.');
        return redirect()->route('gestion.documentodocente.index');
    }
}