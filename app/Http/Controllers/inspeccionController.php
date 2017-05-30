<?php

namespace App\Http\Controllers;

use App\inspeccionModel;
use Illuminate\Http\Request;

class inspeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Inspeccion.inspeccion', ['inspecciones' => inspeccionModel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\inspeccionModel  $inspeccionModel
     * @return \Illuminate\Http\Response
     */
    public function show(inspeccionModel $inspeccionModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inspeccionModel  $inspeccionModel
     * @return \Illuminate\Http\Response
     */
    public function edit(inspeccionModel $inspeccionModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inspeccionModel  $inspeccionModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inspeccionModel $inspeccionModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inspeccionModel  $inspeccionModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(inspeccionModel $inspeccionModel)
    {
        //
    }
}
