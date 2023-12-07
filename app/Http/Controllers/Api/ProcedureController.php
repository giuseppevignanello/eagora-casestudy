<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{

    public function index(Request $request)
    {
        $procedures = Procedure::all()->orderByDesc('id');

        return response()->json([
            'success' => true,
            'procedures' => $procedures
        ]);
    }
}
