<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index() : JsonResponse
    {
        $faqs = Cache::remember('faqs', now()->addHours(24), function() {
            return Detail::all();
        });
        return response()->json($faqs);
    }
}
