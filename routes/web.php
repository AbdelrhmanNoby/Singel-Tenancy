<?php

use App\Http\Controllers\SubdomainController;
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
// foreach (config('tenancy.central_domains') as $domain) {
//     Route::domain($domain)->group(function () {

//         Route::get('/', function () {
//            return view('welcome');
//         });
        
//     });
// }

// Route::get('/', function () {
//     return view('welcome');
//  });

Route::get('/',[SubdomainController::class,"create"]);
Route::post('/subdomain',[SubdomainController::class,"store"])->name('subdomain.store');