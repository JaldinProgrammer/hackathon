<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dump extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lat',
        'long',
        'dump_type_id',
        'faculty_id'
    ];

    protected $dates = [];

    public function fills(){
        return $this->hasMany(Fill::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function dumpType(){
        return $this->belongsTo(DumpType::class);
    }
    
}
