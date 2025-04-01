<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contact;

class ContactController extends Controller
{
    public function contacts(Request $request)
    {
        $fields=$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        contact::create($fields);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
