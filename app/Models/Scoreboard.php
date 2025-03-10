<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Scoreboard extends Model
{
    protected $fillable = [
        'user_id',
        'score'
    ];

    public function user(){
       return $this->belongsTO(User::class, 'user_id');
    }
}
