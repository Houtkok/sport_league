<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stadium extends Model
{
    use HasFactory;
    protected $primaryKey='stadium_id';
    protected $fillable = [
        'stadium_name',
        'capacity',
        'location'
    ];
    public function schedules(){
        return $this->hasMany(Schedule::class);
    }
}
