<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'WB.WB_DOCENTE';
    protected $primaryKey = 'COD_DOCENTE';
    protected $fillable = [
        'DES_NOMBRE',
        'DES_APELLIDO',
        'DES_EMAIL',
        'DES_NIVEL',
        'IND_TIPO',
        'IMG_FOTO',
        'ENL_WEB',
        'ENL_LINKEDIN',
        'ENL_FACEBOOK',
        'ENL_TWITER',
        'ENL_YOUTUBE',
        'IND_ESTADO',
        'FEC_REGISTRO',
        'FEC_MODIFICO',
        'USU_REGISTRO',
        'USU_MODIFICO',

    ];
    public $timestamps = false;
}
