<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('first', function () {
//     return 'welcome to first Route';
// });

// Route::get('cars/{id?}', function ($id=10) {
//     return 'car number is  '.$id;
// });
// // Route::get('vendor/{id?}' ,function ($id=0) {
// //     return 'vendor id is   ' .$id;
// // })-> where (['id'=> '[0-9]+']);
// Route::get('vendor/{id?}' ,function ($id=0) {
//     return 'vendor id is   ' .$id;
// })-> wherenumber ('id');

// Route::get('user/{name}/{age?}' ,function ($name,$age=0) {
//     if( $age!=0)
//        return 'User name is   ' .$name . '   and age is' . $age ;
//     else   return 'User name is   ' .$name ;
     
// })-> where (['age'=> '[0-9]+'] ,
// ['name'=> '[a-zA-Z]+']);
// Route::get('grade/{degree}' ,function ($degree=0) {
//     return 'grade id is   ' .$degree;
// })-> whereIn ('degree' ,['good','verygood']);


Route::prefix('company')->group(function() {
    Route::get('', function () {
        return 'company index  ';
    });
    Route::get('it', function () {
        return 'company it  ';
    });
});



Route::prefix('accounts')->group(function() {
    Route::get('', function () {
        return 'ACCOUNTS   ';
    });
    Route::get('admin', function () {
        return 'ACCOUNTS ADMIN  ';
    });
    Route::get('user', function () {
        return 'ACCOUNTS USER  ';
    });
});

Route::prefix('cars')->group(function(){
    Route::prefix('usa')->group(function(){
        Route::get('ford', function () {
            return 'FORD  ';
        });
        Route::get('tesla', function () {
            return 'TESLA  ';
        });
    });

    Route::prefix('ger')->group(function() {
        Route::get('mercedes', function () {
            return 'MERCEDES  caRs ';
        });
        Route::get('audi', function () {
            return 'AUDI  caRs';
        });
        Route::get('volkswagen', function () {
            return 'volkswagen caRs  ';
        });
    });
    
});