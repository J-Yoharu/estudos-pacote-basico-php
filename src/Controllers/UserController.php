<?php

namespace Basico\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function paginate()
    {
        return response()->json(['method' => 'paginate']);
    }

    public function show($id)
    {
        return response()->json(['method' => 'show', 'id' => $id]);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        return response()->json(['method' => 'create', 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'filled',
            'age' => 'filled|numeric',
            'email' => 'filled|email',
            'password' => 'filled'
        ]);

        return response()->json(['method' => 'update', 'id' => $id, 'data' => $data]);
    }

    public function delete($id)
    {
        return response()->json(['method' => 'delete', 'id' => $id]);
    }
}