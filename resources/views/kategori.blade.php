@extends('layouts.master')
@section('title','Kategori')
@section('content')
<div class="container">
    <ol class="breadcrumb">
       <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
       <li class="active">{{ $kategori->kategori_adi }}</li>
   </ol>
   <div class="row">
       <div class="col-md-3">
           <div class="panel panel-default">
               <div class="panel-heading">{{$kategori->kategori_adi}}</div>
               <div class="panel-body">
                   @if(count($alt_kategoriler)>0)
                   <h3>Alt Kategoriler</h3>
                   <div class="list-group categories">
                       @foreach($alt_kategoriler as $alt_kategori)
                       <a href="{{ route('kategori',$alt_kategori->slug) }}" class="list-group-item">
                           <i class="fa fa-arrow-circle-right"></i>
                           {{ $alt_kategori->kategori_adi }}
                       </a>
                       @endforeach
                   </div>
                   @else
                       Bu kategoride başka alt kategori bulunamamaktardır.
                   @endif
                   <h3>Fiyat Aralığı</h3>
                   <form>
                       <div class="form-group">
                           <div class="checkbox">
                               <label>
                                   <input type="checkbox"> 100-200
                               </label>
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="checkbox">
                               <label>
                                   <input type="checkbox"> 200-300
                               </label>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
       <div class="col-md-9">
           <div class="products bg-content">
               @if (count($urunler)>0)
               Sırala
               <a href="#" class="btn btn-default">Çok Satanlar</a>
               <a href="#" class="btn btn-default">Yeni Ürünler</a>
               @endif
               <hr>
               <div class="row">
                   @if(count($urunler) == 0)
                       <div class="col-md-12">Bu kategoride henüz ürün bulunmamaktadır! </div>
                   @endif
                   @foreach($urunler as $urun)
                       <div class="col-md-3 product">
                           <a href="{{ route('urun',$urun->slug) }}"><img src="http://via.placeholder.com/400x400?text=UrunResmi"></a>
                           <p><a href="{{ route('urun',$urun->slug) }}">{{ $urun->urun_adi }}</a></p>
                           <p class="price">{{ $urun->fiyati }} ₺</p>
                           <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                       </div>
                   @endforeach
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
