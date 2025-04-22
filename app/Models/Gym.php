<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    protected $fillable = ['name','description','location'];
    /** @use HasFactory<\Database\Factories\GymFactory> */
    use HasFactory;
    public function ninja(){
        return $this->hasMany(Ninja::class);
    }
}
