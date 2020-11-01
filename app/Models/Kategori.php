<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "kategori";
    protected $guarded = [];
    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';

    public function urunler()
    {
        return $this->belongsToMany('App\Models\Urun','kategori_urun');
    }
}
