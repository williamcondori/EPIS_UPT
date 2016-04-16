<?php

namespace EPIS_UPT;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'AD.AD_USUARIO';
    protected $primaryKey = 'COD_USUARIO';
    protected $fillable = [
        'DES_NOMBRE',
        'DES_APELLIDO',
        'DES_EMAIL',
        'DES_USUARIO',
        'DES_PASSWORD',
        'IMG_FOTO',
        'IND_ESTADO',
        'FEC_REGISTRO',
        'FEC_MODIFICO',
        'USU_REGISTRO',
        'USU_MODIFICO',
    ];
    protected $hidden = ['DES_PASSWORD', 'remember_token'];
    public $timestamps = false;
}