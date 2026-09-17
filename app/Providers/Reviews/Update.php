<?php

namespace App\Providers\Reviews;

use Illuminate\Http\Request;
use App\Models\Review;

class Update
{
    public function update(Request $request, int $id)
    {
        $review = Review::findOrFail($id);

        try {
            // $review->name = $request->name;
            // $review->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Review kon niet worden bijgewerkt.');
        }

        return redirect()
            ->route('reviews.get', $review->id)
            ->with('success', 'Categorie bijgewerkt.');
    }
}