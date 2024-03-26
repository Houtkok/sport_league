<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $primaryKey='match_id';
    protected $fillable = [
        'match_time',
        'match_name',
        'stadium_id',
        'team_A',
        'team_B',
    ];
    public function stadium(){
        return $this->belongsTo(Stadium::class);
    }
    public function team(){
        return $this->hasMany(Team::class);
    }
    
}
