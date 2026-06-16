<?php

namespace App\Http\Controllers;

use App\Models\Faltas;
use Illuminate\Http\Request;

class FaltasController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return Inertia::render('Faltas/Create');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Faltas $faltas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faltas $faltas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faltas $faltas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faltas $faltas)
    {
        //
    }
}
