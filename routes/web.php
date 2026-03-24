<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/proseslogin', [AuthController::class, 'proseslogin'])->name('proseslogin');
Route::get('/beranda', [AuthController::class, 'beranda'])->name('beranda');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/prosesregister', [AuthController::class, 'prosesregister'])->name('prosesregister');
// Route::redirect('/', '/beranda');

// Route::get('/beranda', function () {
//     return view('pages.beranda'); 
// });

Route::get('/about', function(){
    $biodata = [
        'name'=>'Yoga.ant',
        'age' =>28,
        'Address' =>'Pontianak',
    ];
    return view('pages.about',$biodata);
});

//satu controller untuk banyak method
Route::get('/product',[ProdukController::class,'index']); //Read data (menampilkan data)
Route::get('/product/create',[ProdukController::class,'create']); //untuk menampilkan form data
Route::post('/product',[ProdukController::class,'store']); //untuh mengolah data yang telah dikirim dari halaman form data
Route::get('/product/{id}',[ProdukController::class,'show']); // untuk menampilkan deatil data 
Route::get('product/{id}/edit',[ProdukController::class,'edit']);//Update data (untuk mengubah/mengupdate data)
Route::put('/product/{id}',[ProdukController::class,'update']); //untuk mengolah data yang telah dikirim dari form efit data ke db
Route::delete('/product/{id}',[ProdukController::class,'destroy']); //method untuk menghapus data

//Route dengan resource
Route::resource('kategori',KategoriController::class); // Routing dengan resource

//inisialisasi untuk menampilkan array dari db 
// route::get('/about/{id}', function($id){
//     return view('pages.apps.detail',[
//         'nomor'=>$id
//     ]);
// });

// Route untuk halaman statis 
Route::view('/contact','pages.contact');

Route::view('/routing', 'pages.roadmap.routing');

Route::view('/models', 'pages.roadmap.models');

Route::view('/midleware', 'pages.roadmap.midleware');

Route::view('/view', 'pages.roadmap.view');

Route::view('/controller', 'pages.roadmap.controller');
