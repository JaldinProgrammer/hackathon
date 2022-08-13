<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $dates = [];

    public function dumps(){
        return $this->hasMany(Dump::class);
    }

    public function trashSamples(){
        return $this->hasMany(TrashSample::class);
    }

    public function facultyUser(){
        return $this->hasMany(FacultyUser::class);
    }
}
