<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'memorial_id',
        'notice',
        'date',
        'description'
    ];

    public function memorial()
    {
        return $this->belongsTo(Memorial::class);
    }
}
