<?php

namespace App\Http\Controllers;

use App\Models\Novedad;
use Illuminate\Http\Request;

class NovedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sys.novedads.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sys.novedads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function show(Novedad $novedad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function edit(Novedad $novedad)
    {
        //
        return view('sys.novedads.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novedad $novedad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Novedad  $novedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novedad $novedad)
    {
        //
    }
}
