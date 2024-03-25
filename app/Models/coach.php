<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coach extends Model
{
    use HasFactory;
    protected $primaryKey='coach_id';
    protected $fillable = [
        'coach_name',
    ];
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
