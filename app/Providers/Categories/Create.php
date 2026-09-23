<?php

namespace App\Providers\Categories;
use Illuminate\Http\Request;

use App\Models\Category;

class Create
{
    public function create(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories.index');
    }
}
