<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stadium extends Model
{
    use HasFactory;
    protected $fillable = [
        'stadium_name',
        'capacity',
        'location'
    ];
    public function schedules(){
        return $this->hasMany(Schedule::class);
    }
}
