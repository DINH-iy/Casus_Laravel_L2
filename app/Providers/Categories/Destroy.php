<?php

namespace App\Providers\Categories;

use App\Models\Category;

class Destroy
{
    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);

        if (!$category->canDelete()) {
            return redirect()
                ->route('categories.index')
                ->with(
                    'error',
                    'Deze categorie kan niet worden verwijderd omdat er producten aan gekoppeld zijn.'
                );
        }

        $category->delete();

        return redirect()
            ->route('categories.index')
            ->with('success', 'Categorie verwijderd.');
    }
}