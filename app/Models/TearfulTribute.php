<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TearfulTribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'memorial_id',
        'title',
        'sub_title',
        'description',
        'country',
        'date',
    ];

    public function memorial(){
        return $this->belongsTo(Memorial::class);
    }
}
