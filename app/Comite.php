<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    protected $table = 'WB.WB_COMITE';
    protected $primaryKey = 'COD_COMITE';
    protected $fillable = [
        'DES_NOMBRE',
        'DES_RESENA',
        'IMG_IMAGEN',
        'IND_ESTADO',
        'FEC_REGISTRO',
        'FEC_MODIFICO',
        'USU_REGISTRO',
        'USU_MODIFICO',
    ];
    public $timestamps = false;
}
