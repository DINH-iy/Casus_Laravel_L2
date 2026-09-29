<?php

namespace App\Http\Controllers;

use App\Providers\Orders\Index;
// use App\Providers\Orders\Get;
// use App\Providers\Orders\Update;
use Illuminate\Http\Request;
use App\Http\Interfaces\ControllerInterface;

class OrderController extends Controller implements ControllerInterface
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
        // $create = new Create();
        // return $create->create($request);
    }

    public function update(Request $request, int $id)
    {
        // $update = new Update();
        // return $update->update($request, $id);
    }

    public function destroy(int $id)
    {
        //$destroy = new Destroy();
        //return $destroy->destroy($id);
    }
}
