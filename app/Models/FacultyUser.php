<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'user_id',
        'faculty_id'
    ];

    protected $dates = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }    

}
