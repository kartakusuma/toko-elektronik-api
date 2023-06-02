<?php

namespace App\Http\Controllers;

use App\Models\Produsen;
use Illuminate\Http\Request;

class ProdusenController extends Controller
{
    public function apiIndex() {
        $produsens = Produsen::all();

        return response()->json([
            'status' => 'success', 'data' => $produsens,
        ]);
    }
}
