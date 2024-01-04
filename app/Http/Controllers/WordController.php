<?php

namespace App\Http\Controllers;

use App\Models\word;
use App\Http\Requests\StorewordRequest;
use App\Http\Requests\UpdatewordRequest;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorewordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(word $word)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(word $word)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewordRequest $request, word $word)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(word $word)
    {
        //
    }
}
