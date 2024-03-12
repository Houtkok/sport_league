<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;
    protected $fillable = [
        'player_fname',
        'player_lname',
        'dob',
        'position',
        'national_id'
    ];
    public function national(){
        return $this->belongsTo(National::class);
    }
    public function scorer(){
        return $this->hasOne(Scorer::class);
    }
    
}
