<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index(){
        $faculties = Faculty::all();
        return view('faculties.index')->with(compact('faculties'));
    }

    public function create(){
        $credentials =   Request()->validate([
            'name' => ['required','string']
        ]);
        Faculty::create([
            'name' => request('name'),
        ]);
        return redirect()->route('faculties.index');
    }
}
