<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorial extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'address',
        'dob',
        'pob',
        'dod',
        'pod',
        'age',
        'religion',
        'residence',
        'visibility',
        'feature_image',
    ];

    public function getVisibilityAttribute($attribute)
    {
        return $this->visibilityOptions()[$attribute] ?? 0;
    }

    public function visibilityOptions()
    {
        return [
            1 => 'Private',
            0 => 'Public',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Gelleries()
    {
        return $this->hasMany(Gellery::class);
    }

    public function notices()
    {
        return $this->hasMany(Notice::class);
    }

    public function tearfulTributes()
    {
        return $this->hasMany(TearfulTribute::class);
    }
}
