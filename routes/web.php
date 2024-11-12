<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::resource('/produtos', ProdutoController::class);











// Route::get('/', function () {
//     return view('welcome');
// });
// ///-- Controllers
// Route::get('/',[ProdutoController::class,'index'])->name('produto.index');
// Route::get('/produto/{id?}',[ProdutoController::class,'show'])->name('produto.show');

// //------------
// Route::get('/empresa', function () {
//     return redirect()->route('admin.users');//view('empresa');
// });

// Route::group([
//     'prefix'=>'admin',
//     'as'=>'admin.'
// ],function(){

//     Route::get('admin/dashboard', function(){
//         return "dashboard";
//     })->name('dashboard');
    
//     Route::get('admin/users', function(){
//         return "users";
//     })->name('users');
    
//     Route::get('admin/clientes', function(){
//         return "clientes";
//     })->name('clientes');
// });




