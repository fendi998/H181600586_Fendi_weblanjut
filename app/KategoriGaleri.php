<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table='kategori_galeri';
    protected $filleble=[
        'nama','users_id'
    ];
    public function galeris(){
        return $this->hasMany(\App\Galeri::class,'kategori_galeri_id');
    }
    public function user(){
        return $this->belongsTo(\App\user::class,'users_id','id');
        
    }
}
