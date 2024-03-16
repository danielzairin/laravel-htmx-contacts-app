<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function (Request $request) {
    $contacts = DB::table('contacts')->get();
    return view('welcome', ['contacts' => $contacts]);
});

Route::post('/contacts', function (Request $request) {
    DB::table('contacts')->insert([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ]);

    return redirect('/');
});
