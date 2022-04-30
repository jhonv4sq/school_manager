<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garde extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
    ];

    public function Trimester() {
        return $this->belongsTo(Trimester::class);
    }
}
