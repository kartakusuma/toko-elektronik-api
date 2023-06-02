<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function apiIndex() {
        $produks = Produk::all();

        return response()->json([
            'status' => 'success',
            'data' => $produks
        ]);
    }
}
