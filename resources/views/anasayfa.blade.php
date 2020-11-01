@extends('layouts.master')
@section('title','Anasayfa')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategoriler</div>
                    <div class="list-group categories">
                        @foreach($kategoriler as $kategori)
                        <a href="{{ route('kategori',$kategori->slug) }}" class="list-group-item">
                            <i class="fa fa-arrow-circle-o-right"></i>
                            {{ $kategori->kategori_adi }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!--Buradaki slider sunucunun ve pc'nin donmasına sebep oluyor -->
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" id="sidebar-product">
                    <div class="panel-heading">Günün Fırsatı</div>
                    <div class="panel-body">
                        <a href="#">
                            <img src="http://lorempixel.com/400/485/food/1" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Öne Çıkan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Çok Satan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">İndirimli Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                        <div class="col-md-3 product">
                            <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>
                            <p><a href="#">Ürün adı</a></p>
                            <p class="price">129 ₺</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
