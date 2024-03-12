<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_name',
        'coach_id'
    ];
    public function coach(){
        return $this->belongsTo(Coach::class);
    }
    public function players(){
        return $this->hasMany(Player::class);
    }
}
