<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use App\Http\Requests\StoreProcedureRequest;
use App\Http\Requests\UpdateProcedureRequest;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return csrf_token();
        // $procedures = Procedure::all();
        // return view('procedures.index', compact('procedures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('procedures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProcedureRequest $request)
    {
        var_dump("test");
        $valData = $request->validated();
        $valData['type_id'] = $request->input('type_id');
        Procedure::create($valData);
        $procedures = Procedure::all();
        return view('procedures.index', compact('procedures'))->with('message', 'Procedure added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Procedure $procedure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Procedure $procedure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProcedureRequest $request, Procedure $procedure)
    {
        $procedure = Procedure::find($procedure->id);
        $valData = $request->validated();
        $valData['type_id'] = $request->input('type_id');

        $procedure->update($valData);
        return view('procedures.index', compact('procedures'))->with('message', 'Procedure updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Procedure $procedure)
    {
        //
    }
}
