<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationCompetenceRequest;
use App\Models\competence;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competencesList = competence::all();
        return $competencesList;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competence.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationCompetenceRequest $request)
    {
        $datas = $request->validated();
        $competence = Competence::create($datas);
        return redirect()
            ->route('home')
            ->with('success', "La competence à bien ete enregistrée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function show(competence $competence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function edit(competence $competence)
    {
        return view("competence.edit", compact("competence"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationCompetenceRequest $request, competence $competence)
    {
        $datas = $request->validated();
        $competence->update($datas);
                return redirect()
                    ->route('home')
                    ->with('success', "La competence à bien ete modifiée");
    }

    public function delete(competence $competence)
    {
        return view('competence.delete',compact('competence'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function destroy(competence $competence)
    {
        $competence->delete();
        return redirect()->route("home")->with('success', "La competence à bien ete supprimée");
    }
}
