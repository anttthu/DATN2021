<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThuTuc extends Model
{
    protected $table = 'thu_tucs';
    protected $guarded = [];
    
    public function LinhVuc()
    {
        return $this->belongsTo('App\LinhVuc', 'id_linhvuc', 'id');
    }

    public function HoSo()
    {
        return $this->hasMany('App\HoSo', 'id_hoso', 'id');
    }
    
    public function CapThucHien()
    {
        return $this->belongsTo('App\CapThucHien', 'cap_thuc_hien_id', 'id');
    }

    public function BieuMau()
    {
        return $this->hasMany('App\BieuMau', 'id_thutuc', 'id');
    }
}
