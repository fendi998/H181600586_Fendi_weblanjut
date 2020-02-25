<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    //
    protected $table='galeri';

    protected $fillable=[
        'judul','isi','users_id','kategori_galeri_id'
    ];

    public function KategoriGelari(){
        return $this->belongsTo(\app\KategoriGelari::class,'kategori_galeri_id');

    }

    public function user(){
        return $this->elongsTo(\App\User::class,'users_id','id');
        
    }
}
