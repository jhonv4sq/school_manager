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

    public function year() {
        return $this->belongsTo(Year::class);
    }

    public function garde() {
        return $this->hasMany(Garde::class);
    }
}
