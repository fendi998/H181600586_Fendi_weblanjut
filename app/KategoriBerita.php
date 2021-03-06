<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    // 
        protected $table='kategori_berita';
        protected $illeble=[
            'nama','users_id'
        ];
        public function beritas(){
            return $this->hasMany(\App\Berita::class,'kategori_berita_id','id');
        }
        public function user(){
            return $this->belongsTo(\App\user::class,'users_id','id');
        }
}
