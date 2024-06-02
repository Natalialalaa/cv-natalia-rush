<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationMonBioRequest;
use App\Models\MonBio;
use Illuminate\Http\Request;

class MonBioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dump('index');
        $biographie = MonBio::all();
        return view('mon-bio.index', compact('biographie'));
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
     * @param  \App\Models\MonBio  $monBio
     * @return \Illuminate\Http\Response
     */
    public function show(MonBio $monBio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MonBio  $monBio
     * @return \Illuminate\Http\Response
     */
    public function edit(MonBio $monBio)
    {
        return view('monbio.update', compact('monBio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MonBio  $monBio
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationMonBioRequest $request, MonBio $monBio)
    {
        $datas = $request->validated();
        $monBio->update($datas);
        return redirect()
            ->route('home')
            ->with('success', "La biographie a bien ete enregistrée");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MonBio  $monBio
     * @return \Illuminate\Http\Response
     */
    public function destroy(MonBio $monBio)
    {
        //
    }
}
