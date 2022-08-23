<?php

namespace Basico\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TesteController extends Controller
{
    public function teste()
    {
        return response()->json(['Teste' => 'todos os dados']);
    }

    public function teste2(Request $request)
    {
        return response()->json(['Teste' => $request->all()]);
    }
}