<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class PermisoUsuario extends Model
{
    protected $table = 'AD.AD_PERMISO_X_USUARIO';
    protected $primaryKey = 'COD_PERMISO_X_USUARIO';
    protected $fillable = [
		'COD_PERMISO',
		'COD_USUARIO',
		'IND_ESTADO',
		'FEC_REGISTRO',
		'FEC_MODIFICO',
		'USU_REGISTRO',
		'USU_MODIFICO',
    ];
    public $timestamps = false;
}
