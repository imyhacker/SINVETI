<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\LoginController;
use GuzzleHttp\Client;

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

Route::get('/', function () {
    return redirect('login');
});

// LOGIN Google
Route::group(['prefix' => '/auth'], function(){
    Route::get('/redirect', [LoginController::class, 'redirectToProvider']);
    Route::get('/callback', [LoginController::class, 'handleProviderCallback']);
});

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');
Route::group(['prefix' => '/home/biodata', ['middleware' => ['verified', 'can:isUser']]], function(){
    Route::get('data_diri', [ClientController::class, 'data_diri'])->name('data_diri');
    Route::post('upload_data_diri', [ClientController::class, 'upload_data_diri'])->name('upload_data_diri');
    Route::get('dokumen', [ClientController::class, 'dokumen'])->name('dokumen');
    Route::post('dokumen/upload_akta', [ClientController::class, 'upload_akta'])->name('upload_akta');
    Route::post('dokumen/upload_kk', [ClientController::class, 'upload_kk'])->name('upload_kk');

});

Route::group(['prefix' => '/home/survei'], function(){
    Route::get('/survei', [ClientController::class, 'survei'])->name('survei');
    Route::get('/kerja', [ClientController::class, 'kerja'])->name('kerja');
    Route::post('/update_kerja', [ClientController::class, 'update_kerja'])->name('update_kerja');
    Route::get('/kuliah', [ClientController::class, 'kuliah'])->name('kuliah');
    Route::post('/update_kuliah', [ClientController::class, 'update_kuliah'])->name('update_kuliah');

});

Route::group(['prefix' => '/home/data'], function ($id= null){
  Route::get('/data_siswa', [ClientController::class, 'data_siswa'])->name('data_siswa');
    Route::get('/data_siswa/{id}/edit_siswa', [ClientController::class,
    'edit_siswa'])->name('edit_siswa', $id);
  Route::post('/data_siswa/{id}/edit_siswa/update_siswa',
  [ClientController::class, 'update_siswa'])->name('update_siswa', $id);
  
  
  
  
});
