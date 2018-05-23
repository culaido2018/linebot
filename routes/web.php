<?php

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

use App\Services\LineBotService;


Route::get('/', function () {
    
    echo '19';
    
    app(LineBotService::class)->pushMessage('Test from laravel.');
    
    
    echo '24';
});

Route::any('/callback', function () {
    echo '1';
    \Log::info( 123 );
    
    \Log::info( request() );
});
