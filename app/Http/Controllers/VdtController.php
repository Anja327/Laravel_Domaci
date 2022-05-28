<?php

namespace App\Http\Controllers;

use App\Http\Resources\VdtResurs;
use App\Models\Voditelj;
use Illuminate\Http\Request;

class VdtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vdt = Voditelj::all();
        return VdtResurs::collection($vdt);
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
     * @param  \App\Models\Voditelj  $voditelj
     * @return \Illuminate\Http\Response
     */
    public function show(Voditelj $voditelj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voditelj  $voditelj
     * @return \Illuminate\Http\Response
     */
    public function edit(Voditelj $voditelj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voditelj  $voditelj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voditelj $voditelj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voditelj  $voditelj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voditelj $voditelj)
    {
        $voditelj->delete();
        return response()->json('Voditelj uspešno obrisan!');
    }
}
