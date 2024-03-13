<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scorer extends Model
{
    use HasFactory;
    protected $fillable = [
        'goal_time',
        'goal_count',
    ];
    
    public function match(){
        return $this->belongsTo(schedule::class);
    }
}
