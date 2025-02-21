<?php

use Illuminate\Support\Facades\Route;

// Route::fallback (function () {
//     return view('notfound');
// });


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

// Route::get('/homepage', function () {
//     return view('halaman1');
// });

// Route::get('mahasiswa/{nama}',function ($nama){
//     echo "ini halaman Mahasiswa dengan nama $nama";
// });

// Route::get('/hello/hello1/hello2/hello3',function (){
//     echo "Hello World";
// });

Route::get('/mahasiswa', function(){
    $data = ["khalifah","ihwan ariga","Herdio","Kania","Putri chantika","ramadhani"];
    return view ('mahasiswa.index')->with('mhs',$data);
});