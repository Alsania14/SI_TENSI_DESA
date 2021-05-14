<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPotensi extends Model
{
    protected $table = 'tb_jenispotensi';

    function getTableName(){
        return $this->table();
    }
}
