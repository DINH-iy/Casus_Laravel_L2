<?php

namespace App\Http\Controllers;

use App\Providers\Reviews\Index;
use App\Providers\Reviews\Get;
use App\Providers\Reviews\Update;
use Illuminate\Http\Request;
use App\Http\Interfaces\ControllerInterface;

class ReviewController extends Controller implements ControllerInterface
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

    public function create(Request $request)
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
