<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index() : JsonResponse
    {
        $infos = Info::all();
        return response()->json($infos);
    }
}
