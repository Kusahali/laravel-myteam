<?php

namespace App\Http\Controllers;
use App\Models\nhansu;
use Illuminate\Http\Request;

class nhansuController extends Controller
{
    public function index()
    {
        $nhansu = nhansu::all();
        return view('nhansu.index', compact('nhansu'));
    }
    public function show($id)
    {
        $nhansu = nhansu::find($id);
        return view('team.show',['nhansu' => $nhansu,'gioithieu'=>$nhansu->gioithieu]);
}
}
