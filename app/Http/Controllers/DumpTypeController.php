<?php

namespace App\Http\Controllers;

use App\Models\DumpType;
use Illuminate\Http\Request;

class DumpTypeController extends Controller
{
    public function index(){
        $dumptypes = DumpType::all();
        return view('dumpsType.index')->with(compact('dumptypes'));
    }

    public function create(Request $request){
        $credentials =   Request()->validate([
            'name' => ['required','string'],
            'dimension' => ['required','string'],
            'materia' => ['required','string'],
        ]);
        DumpType::create([
            'name' => request('name'),
            'dimension' => request('dimension'),
            'materia' => request('materia')
        ]);
        return redirect()->route('dumptypes.index');
    }
}
