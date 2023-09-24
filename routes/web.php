<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lama', function () {
    return view('newfolder.lama');
});
route::get('contact/{id}',function($id){
    return view('contact',[
   'id'=>$id
    ]);
});
route::get('/contact/{id}',function($id){
    $cats=[
        1=>"games",
        2=>"tools",
        3=>"books"
    ];
    return view('contact',[
        'cat'=>$cats[$id]??"notfound"
    ]);
});
Route::get('contact', function () {
   $name=request("name");
   return $name;
});  