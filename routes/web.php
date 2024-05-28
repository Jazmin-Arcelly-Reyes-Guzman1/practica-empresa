<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/service/{letra?}', function ($letra = null) {
    return view('services.service', ['letra' => $letra]);
})->where('letra', '[a-zA-Z]+')->name('services.service');

Route::get('/project/{letra?}', function ($letra = null) {
    return view('projects.project', ['letra' => $letra]);
})->where('letra', '[a-zA-Z]+')->name('projects.project');

Route::get('/customer/{letra?}', function ($letra = null) {
    return view('customers.customer', ['letra' => $letra]);
})->where('letra', '[a-zA-Z]+')->name('customers.customer');

Route::get('/blog/{id?}', function ($id = null) {
    return view('blogs.blog', ['id' => $id]);
})->where('id', '[0-9]+')->name('blogs.blog');

Route::get('/contact', function () {
    return view('contacts.contact');
})->name('contacts.contact');

//RUTAS BÁSICAS
// Route::get('/', function () {
//     return 'Home';
// });

// Route::get('/service/{letra?}', function ($letra = null) {
//     return $letra;
// })->where('letra', '[a-zA-Z]+');

// Route::get('/project/{letra?}', function ($letra = null) {
//     return $letra;
// })->where('letra', '[a-zA-Z]+');

// Route::get('/customer/{letra?}', function ($letra = null) {
//     return $letra;
// })->where('letra', '[a-zA-Z]+');

// Route::get('/blog/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('/contact', function () {
//     return 'Contacto';
// });
