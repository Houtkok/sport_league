<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $table = ['tickets'];
    protected $fillable = [
        'seat_num',
        'seat_type',
        'purchase_date',
        'price',
        'match_id',
        'user_id',
        'purchase_id'
    ];
    public function match(){
        return $this->belongsTo(schedule::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function purchase(){
        return $this->belongsTo(purchase::class);
    }
}
