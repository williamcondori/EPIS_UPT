<?php

namespace EPIS_UPT\Http\Controllers\Administracion;

use EPIS_UPT\Http\Utils\Bitacora;
use EPIS_UPT\Http\Utils\Imagenes;
use EPIS_UPT\Http\Utils\Utilidades;
use EPIS_UPT\Lista;
use Illuminate\Http\Request;

use EPIS_UPT\Http\Requests;
use EPIS_UPT\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class ResultadoestudianteController extends Controller
{
    /** Sección Publicación */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos = Lista::where('DES_TIPO', '=', 'RESU')->orderBy('FEC_REGISTRO', 'DESC')->paginate(20);
        return view('admin.resultadoestudiante.index', compact('Datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resultadoestudiante.crear');
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
        $Registro['DES_TIPO'] = 'RESU';
        $Registro = Bitacora::crear($Registro);
        Lista::create($Registro);
        Flash::success('Se ha creado correctamente el registro.');
        return redirect()->route('gestion.resultadoestudiante.index');
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
        $Datos = Lista::find($id);
        return view('admin.resultadoestudiante.editar', ['Registro' => $Datos]);
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
        $Registro = Lista::find($id);
        $Registro->fill($request->all());
        $Registro = Bitacora::modificar($Registro);
        $Registro->save();
        Flash::success('Se ha modificado correctamente el registro.');
        return redirect()->route('gestion.resultadoestudiante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lista::destroy($id);
        Flash::success('Se ha eliminado correctamente el registro.');
        return redirect()->route('gestion.resultadoestudiante.index');
    }
}