<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index() : JsonResponse
    {
        $faqs = Detail::all();
        return response()->json($faqs);
    }
}
