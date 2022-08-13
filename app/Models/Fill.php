<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fill extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'dump_id'
    ];

    protected $dates = ['date', 'time'];

    public function dump(){
        return $this->belongsTo(Dump::class);
    }
}
