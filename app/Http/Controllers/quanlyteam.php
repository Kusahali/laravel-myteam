<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team;
use App\Models\nhansu;
class quanlyteam extends Controller
{
    public function show($id)
    {
        $nhansu = team::find($id)->nhansu;
        return view('team.show', compact('nhansu'));
    }
}
