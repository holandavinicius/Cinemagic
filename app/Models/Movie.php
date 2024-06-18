<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'genre_code',
        'year',
        'poster_filename',
        'synopsis',
        'trailer_url',
    ];

    public function screenings(): HasMany
    {
        return $this->hasMany(Screening::class);
    }

    public function genres(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_code', 'code');
    }
}