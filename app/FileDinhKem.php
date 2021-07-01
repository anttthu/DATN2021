<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileDinhKem extends Model
{
    protected $table = 'file_dinh_kem';
    protected $guarded = [];
    
    public function HoSo()
    {
        return $this->belongsTo('App\HoSo', 'hoso_id', 'id');
    }
}
