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
    $data = [
        'lista' => [
            "studente1" =>[
                "nome" => "Alessandro",
                "cognome" => "Gallus",
                "classe" => "A"
            ],
            "studente2" =>[
                "nome" => "Luca",
                "cognome" => "Logallo",
                "classe" => "B"
            ],
            "studente3" =>[
                "nome" => "Donata",
                "cognome" => "Casalini",
                "classe" => "A"
            ],
        ]
    ];
    return view('home', $data);
});
Route::get('/pagina2', function () {
    return view('pagina2');
});
