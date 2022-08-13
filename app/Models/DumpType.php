<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DumpType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dimension',
        'materia'
    ];

    protected $dates = [];

    public function dumps(){
        return $this->hasMany(Dump::class);
    }
}
