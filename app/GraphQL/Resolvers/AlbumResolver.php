<?php

namespace App\GraphQL\Resolvers;

use App\Models\Album;

class AlbumResolver
{
    public function userRating(Album $album): float
    {
        $user_rating = 0;

        if ($album->num_ratings > 0) {
            $user_rating = round(($album->user_rating_total / $album->num_ratings), 1);
        }

        return $user_rating;
    }
}
