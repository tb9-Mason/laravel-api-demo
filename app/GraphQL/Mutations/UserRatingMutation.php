<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Album;

final readonly class UserRatingMutation
{
    public function update(null $_, array $args)
    {
        $album = Album::findOrFail($args['data']['uuid']);
        $album->update(
            [
                'user_rating_total' => $args['data']['rating'] + $album->user_rating_total,
                'num_ratings' => $album->num_ratings + 1,
            ]
        );

        return $album;
    }
}
