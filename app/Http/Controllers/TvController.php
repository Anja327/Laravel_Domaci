<?php

namespace App\Http\Controllers;

use App\Http\Resources\TvResurs;
use App\Models\Televizija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tv = Televizija::all();
        return TvResurs::collection($tv);
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
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'grad' => 'required|string',
            'direktor' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška!', $validator->errors()]);
        }

        Televizija::create([
            'ime' => $request->ime,
            'grad' => $request->grad,
            'direktor' => $request->direktor,
        ]);

        return response()->json('Televizija je uneta u bazu podataka!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Televizija  $televizija
     * @return \Illuminate\Http\Response
     */
    public function show(Televizija $televizija)
    {
        return new TvResurs($televizija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Televizija  $televizija
     * @return \Illuminate\Http\Response
     */
    public function edit(Televizija $televizija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Televizija  $televizija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Televizija $televizija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Televizija  $televizija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Televizija $televizija)
    {
        $televizija->delete();
        return response()->json('Televizija uspešno obrisana!');
    }
}
