<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    protected $table = 'WB.WB_RESENA';
    protected $primaryKey = 'COD_RESENA';
    protected $fillable = [
		'DES_NOMBRE_AUTOR',
		'DES_DESCRIPCION_AUTOR',
		'DES_RESUMEN_AUTOR',
		'IMG_FOTO_AUTOR',
		'DES_TITULO',
		'DES_RESENA',
		'IMG_IMAGEN',
		'DES_TIPO',
		'IND_ESTADO',
		'FEC_REGISTRO',
		'FEC_MODIFICO',
		'USU_REGISTRO',
		'USU_MODIFICO',
    ];
    public $timestamps = false;
}



