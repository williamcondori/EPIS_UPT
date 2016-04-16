<?php

namespace EPIS_UPT\Http\Controllers\Administracion;

use EPIS_UPT\Docente;
use EPIS_UPT\DTO\Nivel;
use EPIS_UPT\Http\Utils\Bitacora;
use EPIS_UPT\Http\Utils\Imagenes;
use EPIS_UPT\Http\Utils\Utilidades;
use EPIS_UPT\Publicacion;
use Illuminate\Http\Request;

use EPIS_UPT\Http\Requests;
use EPIS_UPT\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class DocenteController extends Controller
{
    /** Sección Docente */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos = Docente::orderBy('FEC_REGISTRO', 'DESC')->paginate(20);
        return view('admin.docente.index', compact('Datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Niveles = [
            'INGE' => 'Ingeniero de Sistemas',
        ];
        $Tipo = [
            'PARC' => 'Tiempo Parcial',
            'COMP' => 'Tiempo Completo'
        ];
        return view('admin.docente.crear', ['Niveles' => $Niveles, 'Tipo' => $Tipo]);
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
        $Registro['IMG_FOTO'] = Imagenes::Subir(Utilidades::MapearArchivo($request['IMAGEN']), '300', '300', 'default-image.png');
        $Registro = Bitacora::crear($Registro);
        Docente::create($Registro);
        Flash::success('Se ha creado correctamente el registro.');
        return redirect()->route('gestion.docente.index');
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
        $Niveles = [
            'INGE' => 'Ingeniero de Sistemas',
        ];
        $Tipo = [
            'PARC' => 'Tiempo Parcial',
            'COMP' => 'Tiempo Completo'
        ];
        $Datos = Docente::find($id);
        return view('admin.docente.editar', ['Niveles' => $Niveles, 'Tipo' => $Tipo, 'Registro' => $Datos]);
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
        $Registro = Docente::find($id);
        $Registro->fill($request->all());
        $Registro['IMG_FOTO'] = Imagenes::Modificar(Utilidades::MapearArchivo($request['IMAGEN']), '300', '300', $Registro['IMG_FOTO']);
        $Registro = Bitacora::modificar($Registro);
        $Registro->save();
        Flash::success('Se ha modificado correctamente el registro.');
        return redirect()->route('gestion.docente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imagenes::Eliminar(Docente::find($id)['IMG_FOTO']);
        Docente::destroy($id);
        Flash::success('Se ha eliminado correctamente el registro.');
        return redirect()->route('gestion.docente.index');
    }
}