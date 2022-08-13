<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrashType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $dates = [];

    public function trashSamples(){
        return $this->hasMany(TrashSample::class);
    }

}
