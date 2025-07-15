<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Base {
    protected $table = 'artist';

    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(Member::class, 'artist_members');
    }
}
