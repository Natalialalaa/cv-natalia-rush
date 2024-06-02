<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\Request;
use App\Http\Controllers\CompetenceController;
use App\Models\experience;
use App\Models\formation;
use App\Models\MonBio;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $competences = competence::all();
        $experiences = experience::all();
        $formations = formation::all();
        $mabio = MonBio::all();
        return view('index.home', compact('competences', 'experiences', 'formations', 'mabio'));
    }
}
