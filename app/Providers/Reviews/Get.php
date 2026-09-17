<?php

namespace App\Providers\Reviews;

use App\Models\Review;

class Get
{
    public function get(int $id)
    {
        $review = Review::findOrFail($id);

        return view('reviews.get', ['review' => $review,]);
    }
}