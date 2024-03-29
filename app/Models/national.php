<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class national extends Model
{
    use HasFactory;
    protected $primaryKey='national_id';
    protected $fillable = [
        'national_name',
    ];
    public function players(){
        return $this->hasMany(Player::class);
    }
}
