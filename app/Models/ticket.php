<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $primaryKey='ticket_id';
    protected $fillable = [
        'seat_type',
        'price',
        'qty',
        'match_id',
        'user_id',
    ];
    public function match(){
        return $this->belongsTo(schedule::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
