<?php
/**
 * Created by PhpStorm.
 * User: willi
 * Date: 20/03/2016
 * Time: 16:50
 */

namespace EPIS_UPT\Http\Utils;


class Utilidades
{
    public static function EstablecerPassword($Password)
    {
        return Seguridad::Encriptar($Password);
    }
    public static function ActualizarPassword($Password, $PasswordEnciptado)
    {
        if ($Password == "") {
            return $PasswordEnciptado;
        } else
        {
            return Seguridad::Encriptar($Password);
        }
    }

    public static function MapearArchivo($Archivo){
       if ($Archivo != null) {
           $File = array(
               'name' => $Archivo->getClientOriginalName(),
               'type' => $Archivo->getClientMimeType(),
               'tmp_name' => $Archivo->getRealPath(),
               'extension' => $Archivo->getClientOriginalExtension(),
               'size' => $Archivo->getSize());
           return $File;
       }
        else {
            return null;
        }
    }
}