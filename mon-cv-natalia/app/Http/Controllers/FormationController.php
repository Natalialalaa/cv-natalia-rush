<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationFormationRequest;
use App\Models\formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formationsList = formation::all();
        return $formationsList;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationFormationRequest $request)
    {
        $datas = $request->validated();
        $formation = formation::create($datas);
        return redirect()
            ->route('home')
            ->with('success', "La formation a bien ete enregistrée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(formation $formation)
    {
        return view('formation.edit',compact("formation"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationFormationRequest $request, formation $formation)
    {
        $datas = $request->validated();
        $formation->update($datas);
                return redirect()
                    ->route('home')
                    ->with('success', "La formation a bien ete modifiée");
    }

    public function delete(formation $formation)
    {
        return view('formation.delete',compact('formation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(formation $formation)
    {
        $formation->delete();
        return redirect()->route("home")->with('success', "La formation' a bien ete supprimée");
    }
}
