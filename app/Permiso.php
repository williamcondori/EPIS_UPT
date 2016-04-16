<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'AD.AD_PERMISO';
    protected $primaryKey = 'COD_PERMISO';
    protected $fillable = [
		'DES_PERMISO',
		'IND_PERMISO',
		'IND_ESTADO',
		'FEC_REGISTRO',
		'FEC_MODIFICO',
		'USU_REGISTRO',
		'USU_MODIFICO',
    ];
    public $timestamps = false;
}



