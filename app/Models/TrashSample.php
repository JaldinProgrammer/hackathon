<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrashSample extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'image',
        'trash_type_id',
        'faculty_id'
    ];

    protected $dates = ['date', 'time'];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function trashType(){
        return $this->belongsTo(TrashType::class);
    }
}
