<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    $contacts = DB::table('contacts')->get();

    return view('welcome', ['contacts' => $contacts]);
});

Route::post('/contacts', function (Request $request) {
    $avatar_path = null;
    if ($request->hasFile('avatar')) {
        $avatar_path = $request->file('avatar')->store('public/avatars');
    }

    $contact_id = DB::table('contacts')->insertGetId([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'avatar' => Storage::url($avatar_path),
    ]);

    $contact = DB::table('contacts')->find($contact_id);

    $hx_request = $request->header('HX-Request');
    if ($hx_request) {
        return view('components.contact-card', ['contact' => $contact]);
    }

    return redirect('/');
});

Route::post('/delete-contact/{id}', function (Request $request, int $id) {
    DB::table('contacts')->delete($id);

    $hx_request = $request->header('HX-Request');
    if ($hx_request) {
        return response('', 200);
    }

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
