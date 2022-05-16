<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function trimester() {
        return $this->hasMany(Trimester::class);
    }
}
