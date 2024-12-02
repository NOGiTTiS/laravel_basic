<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $title = 'About';
    return view('about', compact('title'));
});

Route::get('/contact', function () {
    $name = 'Contact';
    $age = 20;
    $salary = 1000;

    return view('contact', compact('name', 'age', 'salary'));
});

Route::get('/profile', function () {
    return view('profile', ['name' => 'NOGiTTiS', 'age' => 36]);
});

Route::get('/params/{name}/{age}/{salary}', function ($name, $age, $salary) {
    return view('params', compact('name', 'age', 'salary'));
});

//POST
Route::get('/post', function () {
    return view('post');
});

Route::post('/post', function (Request $request) {
    $name = $request->name;

    return json_encode(['name' => $name]);
});

Route::get('home', function () {
    return view('home');
});

Route::get('/response', function () {
    return response()->json(['name' => 'NOGiTTiS']);
});

Route::get('/products', function () {
    $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 100],
        ['id' => 2, 'name' => 'Product 2', 'price' => 200],
        ['id' => 3, 'name' => 'Product 3', 'price' => 300],
    ];
    return response()->json($products);
});

Route::get('/response-type', function () {
    //401 = unauthorized
    //403 = forbidden
    //404 = not found
    //500 = internal server error
    //200 = ok
    //201 = created
    //202 = accepted
    //204 = no content

    return response('Unauthorized', 401);
});

Route::get('/redirect', function () {
    return redirect('/target');
});

Route::get('/target', function () {
    return response()->json(['message' => 'Target']);
});

$customerController = CustomerController::class;

Route::get('/customers', [$customerController, 'list']);
Route::get('/customers/{id}', [$customerController, 'detail']);
Route::post('/customers', [$customerController, 'create']);
Route::put('/customers/{id}', [$customerController, 'update']);
Route::delete('/customers/{id}', [$customerController, 'delete']);

Route::get('/users/list', [UserController::class, 'list']);
Route::get('/users/form', [UserController::class, 'form']);
Route::post('/users', [UserController::class, 'create']);
Route::get('/users/{id}', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/remove/{id}', [UserController::class, 'remove']);
