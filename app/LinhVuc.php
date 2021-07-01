<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinhVuc extends Model
{
    protected $table = 'linh_vucs';
    public $timestamps = false;

    public function ThuTuc() {
        return $this->hasMany('App\ThuTuc','id_thutuc','id');
    }

    public function QuyTrinh() {
        return $this->hasMany('App\QuyTrinh','id_quytrinh','id');
    }



    protected $fillable = [
        'malinhvuc', 'tenlinhvuc', 'mota',
    ];
}
