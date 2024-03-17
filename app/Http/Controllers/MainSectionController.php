<?php

namespace App\Http\Controllers;

use App\Models\MainSection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MainSectionController extends Controller
{
    public function index() : JsonResponse
    {
        $sections = MainSection::all();
        return response()->json($sections);
    }
}
