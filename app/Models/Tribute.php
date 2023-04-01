<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tribute extends Model
{
    protected $fillable = ['user_id', 'message'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
