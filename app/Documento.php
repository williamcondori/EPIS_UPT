<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'WB.WB_DOCUMENTO';
    protected $primaryKey = 'COD_DOCUMENTO';
    protected $fillable = [
		'DES_NOMBRE',
		'DES_DESCRIPCION',
		'DES_RUTA',
		'DES_TIPO',
		'IND_ESTADO',
		'FEC_REGISTRO',
		'FEC_MODIFICO',
		'USU_REGISTRO',
		'USU_MODIFICO',
    ];
    public $timestamps = false;
}


