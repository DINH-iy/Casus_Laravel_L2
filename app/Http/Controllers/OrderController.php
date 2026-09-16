<?php

namespace App\Http\Controllers;

use App\Providers\Orders\Index;
// use App\Providers\Orders\Get;
// use App\Providers\Orders\Update;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index = new Index();
        return  $index->Index();
    }

    // public function get(int $id)
    // {
    //     $get = new Get();

    //     return $get->get($id);
    // }

    // public function create()
    // {
    //     //
    // }

    // public function update(Request $request, int $id)
    // {
    //     $update = new Update();

    //     return $update->update($request, $id);
    // }

    // public function destroy(int $id)
    // {
    //     //
    // }
}
