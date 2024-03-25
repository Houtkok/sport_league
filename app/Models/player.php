<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;
    protected $primaryKey='player_id';
    protected $fillable = [
        'player_id',
        'player_fname',
        'player_lname',
        'dob',
        'position',
        'national_id'
    ];
    public function national(){
        return $this->belongsTo(National::class);
    }
}
