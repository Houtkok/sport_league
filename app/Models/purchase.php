<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    use HasFactory;
    protected $table = ['purchases'];
    protected $fillable = [
        'total_amount',
        'purchase_date',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
