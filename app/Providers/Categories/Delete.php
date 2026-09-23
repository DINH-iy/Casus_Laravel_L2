<?php

namespace App\Providers\Categories;

use App\Models\Category;

class Destroy
{
    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $category->destroy();
        return view('categories.index', ['categories' => Category::all()]);
    }
}
