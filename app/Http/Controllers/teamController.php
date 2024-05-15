<?php

namespace App\Http\Controllers;
use App\Models\team;
use Illuminate\Http\Request;

class teamController extends Controller
{
    public function index()
    {
        $team = team::all();
        return view('index', compact('team'));
    }
    public function show($id)
    {
        $team = team::find($id);
        return view('team.show',['team' => $team,'name'=>$team->name]);
    }
}
