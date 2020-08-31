<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    // $pizza = [
    //     'type'=>'hawaiian', 
    //     'base' => 'cheesy crust',
    //     'price' => 10 
    // ];
    // return view('pizzas', $pizza);
    $pizzas = [
        ['type'=> 'hawaiian',  'base' => 'cheesy crust','price' => 10],
        ['type'=> 'volcano',  'base' => 'Garlic crust','price' => 20],
        ['type'=> 'veg Supreme',  'base' => 'Thin & crispy','price' => 30]
    ];



        return view('pizzas' , [
            'pizzas'=> $pizzas,
            'name' =>  request('name'),
            'age' =>request('age')
        ]);

});

Route::get('/pizzas/{id}', function ($id) {
  
        return view('details' , ['id' => $id]);

});

