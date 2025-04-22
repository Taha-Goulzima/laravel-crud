<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    protected $fillable =['name','lastname','gym_id'];
    use HasFactory;
    public function gym(){
        return $this->belongsTo(Gym::class);
    }
}
