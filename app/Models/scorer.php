<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scorer extends Model
{
    use HasFactory;
    protected $table = ['scorers'];
    protected $fillable = [
        'goal_time',
        'player_id',
        'match_id'
    ];
    public function player(){
        return $this->belongsTo(player::class);
    }
    public function match(){
        return $this->belongsTo(schedule::class);
    }
}
