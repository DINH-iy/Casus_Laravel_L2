<?php

namespace App\Providers\Categories;

use Illuminate\Http\Request;
use App\Models\Category;

class Update
{
    public function update(Request $request, int $id)
    {
        $category = Category::findOrFail($id);

        try {
            $category->name = $request->name;
            $category->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Categorie kon niet worden bijgewerkt.');
        }

        return redirect()
            ->route('categories.get', $category->id)
            ->with('success', 'Categorie bijgewerkt.');
    }
}