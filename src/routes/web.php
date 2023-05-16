<?php

//namespace Apackage\Astore;

use Apackage\Astore\Facade\Currency;
use Apackage\Astore\FacadeClasses\CurrentCurrency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;


Route::group(['namespace'=>'Apackage\Astore\Http\Controllers'], function(){

    
    Route::get('store', "StoreController@index")->name('store');
    Route::post('store', "StoreController@send");
    Route::get('cart/{id}', "StoreController@addtocart");
    Route::get('cart',"StoreController@showcart");
    Route::post('cart', "StoreController@cartupdate")->name('cart.update');
    Route::post('remove', "StoreController@cartremove")->name('cart.remove');
    Route::get('order',"StoreController@showorder")->name('order.show');
    Route::post('order',"StoreController@completeorder")->name('order.complete');

    Route::get('currency',[CurrentCurrency::class,'index'])->name('currency');
    
});
