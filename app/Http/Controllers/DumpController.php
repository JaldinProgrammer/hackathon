<?php

namespace App\Http\Controllers;

use App\Models\Dump;
use App\Models\DumpType;
use App\Models\Faculty;
use Illuminate\Http\Request;

class DumpController extends Controller
{
    public function index(){
        $dumps = Dump::all();
        $faculties = Faculty::all();
        $dumpTypes = DumpType::all();
        $dumps->load('dumpType');
        $dumps->load('faculty');
        return view('dumps.index')
                ->with(compact('dumps'))
                ->with(compact('faculties'))
                ->with(compact('dumpTypes'));
    }

    public function create(Request $request){
        $credentials =   Request()->validate([
            'name' => ['required','string'],
            'lat' => ['required','string'],
            'long' => ['required','string'],
            'dumptype_id' => ['required'],
            'faculty_id' => ['required'],
        ]);
        Dump::create([
            'name' => request('name'),
            'lat' => request('lat'),
            'long' => request('long'),
            'dump_type_id' => request('dumptype_id'),
            'faculty_id' => request('faculty_id'),
        ]);
        return redirect()->route('dumps.index');
    }
}

