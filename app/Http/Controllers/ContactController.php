<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request) : JsonResponse
    {
        $attributes = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'company' => 'required|string',
            'subject' => 'required|string',
        ]);

        Contact::create($attributes);
        return response()->json(['success' => true]);
    }

}
