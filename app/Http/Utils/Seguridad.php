<?php
/**
 * Created by PhpStorm.
 * User: willi
 * Date: 20/03/2016
 * Time: 15:38
 */

namespace EPIS_UPT\Http\Utils;


class Seguridad
{
    public static function Encriptar($Password)
    {
        return $PasswordEnciptado = bcrypt($Password);
    }
}