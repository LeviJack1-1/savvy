<?php

use Illuminate\Http\Client\Request;
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
    return view('Listings',[
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' =>1,
                'title' => 'Listings One',
                'description' => 'Hey guys welcome back to my youtube channel'
            ],
            [
                'id' => 2,
                'title' => 'Listings two',
                'description' => 'Hey guys welcome back to my youtube channel
                IDK WHAT TO DO ANYMORE AHHHHH' 
            ]
            
        ]
            ]);
});
