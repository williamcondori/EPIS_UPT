<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = 'WB.WB_PUBLICACION';
    protected $primaryKey = 'COD_PUBLICACION';
    protected $fillable = [
        'DES_TITULO',
		'DES_RESUMEN',
		'DES_RESENA',
		'IMG_PORTADA',
		'DES_TIPO',
		'IND_ESTADO',
		'FEC_REGISTRO',
		'FEC_MODIFICO',
		'USU_REGISTRO',
		'USU_MODIFICO',
    ];
    public $timestamps = false;

	public function Elementos()
	{
		return $this->hasMany('EPIS_UPT\ElementoPublicacion', 'COD_PUBLICACION');
	}
}
