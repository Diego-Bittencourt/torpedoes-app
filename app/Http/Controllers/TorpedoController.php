<?php

namespace App\Http\Controllers;

use App\Models\Torpedo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TorpedoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        // return response('Hello, from Laravel');
        return Inertia::render('Torpedo/Index', [
            
        ])
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Torpedo $torpedo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Torpedo $torpedo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Torpedo $torpedo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Torpedo $torpedo)
    {
        //
    }
}
