<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{

    public function index(Request $request)
    {
        $query = Procedure::query();

        if ($request->has('status')) {
            $status = $request->input('status');
            $query->where('status', $status);
        }

        if ($request->has('type')) {
            $type = $request->input('type');
            $query->where('type_id', $type);
        }

        $query->orderByDesc('id');
        $procedures = $query->get();


        return response()->json([
            'success' => true,
            'procedures' => $procedures
        ]);
    }
}