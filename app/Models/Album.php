<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Album extends Base {
    protected $table = 'album';

    protected $casts = [
        'release_date' => 'datetime',
    ];

    protected $fillable = ['user_rating_total', 'num_ratings'];

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
