<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() : JsonResponse
    {
        $blogs = Blog::latest()->limit(3)->get();
        return response()->json($blogs);
    }
}
