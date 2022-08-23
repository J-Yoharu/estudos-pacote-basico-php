<?php

namespace Basico\Controllers;

use Illuminate\Http\Request;

class TesteController
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