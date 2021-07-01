<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoSo extends Model
{
    protected $table = 'ho_sos';
    
    public function NguoiCapNhat()
    {
        return $this->belongsTo('App\User', 'nguoicapnhat', 'id');
    }
    public function CongDan()
    {
        return $this->belongsTo('App\User', 'id_congdan', 'id');
    }
    public function FileDinhKem()
    {
        return $this->hasMany('App\FileDinhKem', 'hoso_id', 'id');
    }
    public function ThuTuc()
    {
        return $this->belongsTo('App\ThuTuc', 'id_thutuc', 'id');
    }

    public function TrangThai()
    {
        return $this->belongsTo('App\TrangThaiHoSo', 'trangthaihoso_id', 'id');
    }

    protected $guarded = ['files'];
}
