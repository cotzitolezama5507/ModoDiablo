<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Productos - Confecciones Abigail";
        $viewData["subtitle"] = "Lista de productos";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - Confecciones Abigail ";
        $viewData["subtitle"] = $product->getName()." - Información de producto ";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
