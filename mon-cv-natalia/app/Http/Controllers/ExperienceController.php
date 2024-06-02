<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationExperienceRequest;
use App\Models\experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiencesList = experience::all();
        return $experiencesList;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationExperienceRequest $request)
    {
        $datas = $request->validated();
        $experience = experience::create($datas);
        return redirect()
            ->route('home')
            ->with('success', "L'experience a bien ete enregistrée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(experience $experience)
    {
        return view('experience.edit',compact("experience"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationExperienceRequest $request, experience $experience)
    {
        $datas = $request->validated();
        $experience->update($datas);
                return redirect()
                    ->route('home')
                    ->with('success', "L'experience à bien ete modifiée");
    }

    public function delete(experience $experience)
    {
        return view('experience.delete',compact('experience'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(experience $experience)
    {
        $experience->delete();
        return redirect()->route("home")->with('success', "L'experience' à bien ete supprimée");
    }
}
