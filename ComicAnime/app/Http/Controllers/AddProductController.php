<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function store(Request $request)
    {
        // Llamar al método store del ProductController para agregar el nuevo producto
        $productController = new ProductController();
        return $productController->store($request);
    }
}
