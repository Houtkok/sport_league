<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;
    protected $table = ['players'];
    protected $fillable = [
        'player_fname',
        'player_lname',
        'dob',
        'posotion',
        'national_id'
    ];
    public function nation(){
        return $this->belongsTo(national::class);
    }
}
