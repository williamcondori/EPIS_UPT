<?php
/**
 * Created by PhpStorm.
 * User: willi
 * Date: 03/04/2016
 * Time: 0:28
 */

namespace EPIS_UPT\Http\Utils;


class Documentos
{
    public static function Subir($documento_archivo, $documento_nombre_defecto)
    {
        $nombre = $documento_nombre_defecto;
        if (isset($documento_archivo)) {
            $documento_limite = 10000;
            if ($documento_archivo['size'] <= $documento_limite * 2024) {
                $documento_nombre = $documento_archivo["name"];
                $documento_ruta_temporal = $documento_archivo["tmp_name"];
                $documento_ruta_nueva = public_path() . '\\resources\\documents\\' . $documento_nombre;
                if (move_uploaded_file($documento_ruta_temporal, $documento_ruta_nueva)) {
                    $nombre = $documento_nombre;
                }
            }
        }
        return $nombre;
    }

    public static function Eliminar($documento_nombre)
    {
        $Respuesta = false;
        $documento_ruta = public_path() . '\\resources\\documents\\' . $documento_nombre;
        if (file_exists($documento_ruta)) {
            if (unlink($documento_ruta)) {
                $Respuesta = true;
            }
        }
        return $Respuesta;
    }

    public static function Modificar($documento_archivo, $documento_nombre_defecto)
    {
        $nombre = $documento_nombre_defecto;
        if (isset($documento_archivo)) {
            $nombre = Documentos::Subir($documento_archivo, $documento_nombre_defecto);
            Documentos::Eliminar($documento_nombre_defecto);
        }
        return $nombre;
    }
}