<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function trimester() {
        return $this->belongsTo(Trimester::class);
    }
    
    public function user() {
        return $this->hasMany(User::class);
    }
}