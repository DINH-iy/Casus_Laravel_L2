<?php

namespace App\Http\Controllers;

use App\Providers\Categories\Index;
use App\Providers\Categories\Get;
use App\Providers\Categories\Update;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index = new Index();
        return  $index->Index();
    }

    public function get(int $id)
    {
        $get = new Get();
        return $get->get($id);
    }

    public function create()
    {
        //
    }

    public function update(Request $request, int $id)
    {
        $update = new Update();
        return $update->update($request, $id);
    }

    public function destroy(int $id)
    {
        //
    }
}
