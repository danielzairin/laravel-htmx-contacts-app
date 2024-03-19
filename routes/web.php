<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

Route::post('/delete-contact/{id}', function (int $id) {
    DB::table('contacts')->delete($id);

    return redirect('/');
});

Route::get('/contacts/{id}', function (int $id) {
    $contact = DB::table('contacts')->find($id);

    if (!$contact) {
        abort(404);
    }

    return view('contact', ['contact' => $contact]);
});

Route::get('/contacts/{id}/edit', function (int $id) {
    $contact = DB::table('contacts')->find($id);

    if (!$contact) {
        abort(404);
    }

    return view('contact-edit', ['contact' => $contact]);
});

Route::post('/edit-contact/{id}', function (Request $request, int $id) {
    $contact = DB::table('contacts')->find($id);

    if (!$contact) {
        abort(404);
    }

    DB::table('contacts')->where(['id' => $id])->update([
        'name' => $request->input('name'),
    ]);

    return redirect('/contacts/' . $id);
});
