<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products()
    {
        // Logika untuk menampilkan halaman products
        return view('products');
    }
}
