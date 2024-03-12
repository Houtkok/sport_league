<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'match_time',
        'stadium_id',
    ];
    public function stadium(){
        return $this->belongsTo(Stadium::class);
    }
    public function scorers(){
        return $this->hasMany(Scorer::class);
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
