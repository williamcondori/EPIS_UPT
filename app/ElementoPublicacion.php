<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class ElementoPublicacion extends Model
{
	protected $table = 'WB.WB_ELEMENTO_X_PUBLICACION';
    protected $primaryKey = 'COD_ELEMENTO_X_PUBLICACION';
    protected $fillable = [
		'COD_PUBLICACION',
		'DES_TITULO',
		'IMG_IMAGEN',
		'IND_ESTADO',
		'FEC_REGISTRO',
		'FEC_MODIFICO',
		'USU_REGISTRO',
		'USU_MODIFICO',
    ];
    public $timestamps = false;
}



