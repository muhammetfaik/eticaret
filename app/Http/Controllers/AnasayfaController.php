<?php

namespace App\Http\Controllers;

use App\Models\UrunDetay;
use Illuminate\Http\Request;
use App\Models\Kategori;

class AnasayfaController extends Controller
{
    public function index()
    {
        $kategoriler = Kategori::whereRaw('ust_id is null')->take(8)->get();

       $urunler_slider = UrunDetay::with('urun')->where('goster_slider',1)->take(5)->get();
       $urun_gunun_firsati = Urun::select('urun_detay','urun_detay.urun_id','urun.id')-where('urun_detay.goster_gunun_firsati',1)
               ->orderBy('guncelleme_tarihi','desc')->first();
       return view('anasayfa',compact('kategoriler','urunler_slider'));
    }
}
