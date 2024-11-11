<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function () {
    return redirect()->route('admin.users');//view('empresa');
});

Route::group([
    'prefix'=>'admin',
    'as'=>'admin.'
],function(){



    Route::get('admin/dashboard', function(){
        return "dashboard";
    })->name('dashboard');
    
    Route::get('admin/users', function(){
        return "users";
    })->name('users');
    
    Route::get('admin/clientes', function(){
        return "clientes";
    })->name('clientes');
});




