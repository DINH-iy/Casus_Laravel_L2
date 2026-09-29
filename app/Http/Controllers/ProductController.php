<?php

namespace App\Http\Controllers;

use App\Providers\Products\Index;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Interfaces\ControllerInterface;

class ProductController extends Controller implements ControllerInterface
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
        // $get = new Get();
        // return $get->get($id);
    }

    public function create(Request $request)
    {
        //
    }

    public function update(Request $request, int $id)
    {
        // $update = new Update();
        // return $update->update($request, $id);
    }

    public function destroy(int $id)
    {
        //
    }

}