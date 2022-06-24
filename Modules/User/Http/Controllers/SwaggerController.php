<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SwaggerController extends Controller
{

    /**
     * @OA\Info (
     *     version="1.0",
     *     title="test title"
     *     )
     * @OA\Get (
     *     path="/api/test",
     *     summary="test",
     *     @OA\Response (
     *     response=200,
     *     description="OK"
     * ),
     *     @OA\Response (
     *     response=300,
     *     description="REDIRECTED"
     * ),
     *     @OA\Response (
     *     response=400,
     *     description="NOT OK"
     * )
     * )
     *
     */
    public function index()
    {
        return true;
    }
}
