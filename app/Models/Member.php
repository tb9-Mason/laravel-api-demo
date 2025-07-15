<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Member extends Base {
    protected $table = 'member';

    public function artists(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class, 'artist_members');
    }
}
