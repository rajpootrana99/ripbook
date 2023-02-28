<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gellery extends Model
{
    use HasFactory;

    protected $fillable = ['memorial_id', 'image'];

    public function memorial()
    {
        return $this->belongsTo(Memorial::class);
    }
}
