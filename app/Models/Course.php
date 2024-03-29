<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'master',
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function rating(){
        return $this->hasMany(Rating::class);
    }

    public function year(){
        return $this->belongsTo(Year::class);
    }
    
}
