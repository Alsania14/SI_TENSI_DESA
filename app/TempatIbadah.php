<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatIbadah extends Model
{
    protected $table = 'tb_tempatibadah';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'potensi_id', 'agama_id', 'nama_tempatibadah','lat','lng'
    ];
}
