<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barbershop;
use Illuminate\Http\JsonResponse;

class BarbershopController extends Controller
{
    public function index(): JsonResponse
    {
        $barbershops = Barbershop::all();

        return response()->json([
            'success' => true,
            'message' => 'Data barbershop berhasil diambil',
            'data' => $barbershops,
        ], 200);
    }
}