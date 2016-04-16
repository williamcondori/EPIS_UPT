<?php
/**
 * User: WILLIAM CONDORI
 * Date: 20/03/2016
 * Time: 3:27
 */

namespace EPIS_UPT\Http\Utils;


use Carbon\Carbon;

class Bitacora
{
    public static function crear($Datos){
        $Datos['IND_ESTADO'] = 'A';
        $Datos['FEC_REGISTRO'] = Carbon::now()->toDateTimeString();
        $Datos['FEC_MODIFICO'] = null;
        $Datos['USU_REGISTRO'] = 'Webmaster';
        $Datos['USU_MODIFICO'] = null;
        return $Datos;
    }
    public static function modificar($Datos){
        $Datos['FEC_MODIFICO'] = Carbon::now()->toDateTimeString();
        $Datos['USU_MODIFICO'] = 'Webmaster';
        return $Datos;
    }
}