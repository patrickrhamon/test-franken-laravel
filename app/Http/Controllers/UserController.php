<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        return new JsonResponse(data: User::all(), status: Response::HTTP_OK);
    }

    public function count(): JsonResponse
    {
        return new JsonResponse(data: User::count(), status: Response::HTTP_OK);
    }
}
