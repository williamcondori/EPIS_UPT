<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class DocenteComite extends Model
{
    protected $table = 'WB.WB_DOCENTE_X_COMITE';
    protected $primaryKey = 'COD_DOCENTE_X_COMITE';
    protected $fillable = [
        'COD_DOCENTE',
        'COD_COMITE',
        'DES_CARGO',
        'DES_RESENA',
        'IND_ESTADO',
        'FEC_REGISTRO',
        'FEC_MODIFICO',
        'USU_REGISTRO',
        'USU_MODIFICO',
    ];
    public $timestamps = false;
}

                                                                                                                                                                                                                                                      
