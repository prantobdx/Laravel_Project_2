<?php

use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

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

Route::get( '/', function ()
{
    return view( 'welcome' );
    // return 'Hello World';
    // return view( 'demo' );
} );

Route::get( '/check', [
    'uses' => 'App\Http\Controllers\Example@index',
    'as'   => 'bd',
] );

Route::get( '/arif', 'App\Http\Controllers\NameController@index' )->name( 'Sajol' );

// Route::get( '/full-name', 'App\Http\Controllers\NameController@myname' );

Route::get( '/full-name', [NameController::class, 'myname'] );

Route::get( '/', [StudentController::class, 'home'] )->name( 'home' );