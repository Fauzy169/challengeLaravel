<?php

namespace App\Http\Controllers;

use App\Models\Draggable;
use App\Http\Requests\StoreDraggableRequest;
use App\Http\Requests\UpdateDraggableRequest;

class DraggableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posting.index', [
            'title' => 'Draggble Post'
        ]);
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
    public function store(StoreDraggableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Draggable $draggable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Draggable $draggable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDraggableRequest $request, Draggable $draggable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Draggable $draggable)
    {
        //
    }
}
