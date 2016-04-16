<?php
/**
 * Created by PhpStorm.
 * User: willi
 * Date: 20/03/2016
 * Time: 20:05
 */

namespace EPIS_UPT\Http\Utils;
use Mockery\Exception;

class Imagenes
{
    public static function Subir($image, $width, $height, $default)
    {
        $nombre = $default;
        if (isset($image)) {
            $permitidos = array("image/jpg", "image/jpeg", "image/png");
            $limite_kb = 5000;
            if (in_array($image['type'], $permitidos) && $image['size'] <= $limite_kb * 2024) {
                $images = $image["tmp_name"];
                switch ($image['type']) {
                    case 'image/jpeg':
                        $nombre_image = date("YmdHis") . "." . substr($image["name"], -3);
                        break;
                    default:
                        $nombre_image = date("YmdHis") . "." . substr($image["name"], -3);
                        break;
                }
                $nombre_imagen = public_path() . '\\resources\\images\\' . $nombre_image;
                if (move_uploaded_file($images, $nombre_imagen)) {
                    $magicianObj = new Thumbnail($nombre_imagen);
                    $magicianObj->resizeImage($width, $height);
                    $nomb = public_path() . '\\resources\\images\\' . 'tb' . $nombre_image;
                    $magicianObj->saveImage($nomb, 100);
                    $nombre = $nombre_image;
                }
            }
        }
        return $nombre;
    }

    public static function Eliminar($Imagen)
    {
        $Respuesta = false;
        $Ruta_Imagen = public_path() . '\\resources\\images\\' . $Imagen;
        $Ruta_Imagen_Miniatura = public_path() . '\\resources\\images\\' . 'tb' . $Imagen;
        if (file_exists($Ruta_Imagen)) {
            if (unlink($Ruta_Imagen)) {
                if(file_exists($Ruta_Imagen_Miniatura)){
                    if (unlink($Ruta_Imagen_Miniatura)) {
                        $Respuesta = true;
                    }
                }
            }
        }
        return $Respuesta;
    }

    public static function Modificar($image, $width, $height, $default)
    {
        $nombre = $default;
        if (isset($image)) {
            $nombre = Imagenes::Subir($image, $width, $height, $default);
            Imagenes::Eliminar($default);
        }
        return $nombre;
    }
}