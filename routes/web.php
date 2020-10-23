<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PagesController::class, 'index']);

Route::post('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}',function($id){
    return 'This is a user ' . $id;
}
);
Route::get('/api/v1/merhaba',function(){
    return ['mesaj' => 'Merhaba'];
});

Route::get('/urun/{urunadi}/{id?}',function($urunadi,$id){
    return "Ürün adi: $id $urunadi" ;
})->name('urun_detay');

Route::get('/kampanya',function(){
    return redirect()->route('urun_detay',['urunadi'=>'elma','id' => 5]);
});