<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        return new JsonResponse(data: Post::all(), status: Response::HTTP_OK);
    }

    public function count(): JsonResponse
    {
        return new JsonResponse(data: Post::count(), status: Response::HTTP_OK);
    }
}
