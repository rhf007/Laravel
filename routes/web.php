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

/* Route::get('/', function () {
    return view('welcome');
});


Route::get('articles', function(){
    return 'beep boop beep';
});

Route::get('articles/{id}', function($id){
    return ($id);
    return 'UPdate POST FORM';
});

Route::put('articles/{id}', function(){
    return 'UPdate POST';
});

Route::match(['get', 'post'], 'profile', function(){
    return 'PROFILE';
}); */

Route::prefix('contacts')->group(function () {

    // List of contacts page
    Route::get('/', function () {
        return 'List of contacts page';
    });

    // Details page of contact #22
    Route::get('/22', function () {
        return 'Details page of contact #22';
    });

    // Details page of contact #22 named Ali
    Route::get('/22/{name?}', function ($name = null) {
        $message = $name ? "Details page of contact #22 named $name" : 'Details page of contact #22';
        return $message;
    });

    // Form to create a new contact
    Route::get('/create', function () {
        return 'Create contact form';
    });

    // Store a new contact
    Route::post('/', function () {
        return 'Store a new contact';
    });

    // Edit form of contact #33
    Route::get('/33/edit', function () {
        return 'This is edit form of contact #33';
    });

    // Update contact #33
    Route::put('/33', function () {
        return 'Update contact #33';
    });

    // Delete contact #44
    Route::delete('/44', function () {
        return 'Delete contact #44';
    });

});