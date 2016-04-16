<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table = 'WB.WB_LISTA';
    protected $primaryKey = 'COD_LISTA';
    protected $fillable = [
		'DES_TITULO',
		'DES_CONTENIDO',
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


