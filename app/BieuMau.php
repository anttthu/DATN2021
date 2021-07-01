<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BieuMau extends Model
{
    protected $table = 'bieu_maus';
    public $timestamps = false;

    public function ThuTuc()
    {
        return $this->belongsTo('App\ThuTuc', 'id_thutuc', 'id');
    }
    protected $guarded = [];
}
