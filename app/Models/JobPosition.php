<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $dates = [];

    public function users(){
        return $this->hasMany(User::class);
    }
}
