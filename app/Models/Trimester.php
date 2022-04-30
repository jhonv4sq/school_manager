<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimester extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function garde() {
        return $this->hasMany(Garde::class);
    }
}
