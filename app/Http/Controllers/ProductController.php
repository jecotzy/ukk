<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Cari kategori "Men" dan "Women" dan eager load produk terkait
        $menCat   = Category::where('category_name', 'Men')->with('products')->first();
        $womenCat = Category::where('category_name', 'Women')->with('products')->first();

        // Ambil produk masing-masing kategori (jika ada)
        $menProducts   = $menCat ? $menCat->products : collect();
        $womenProducts = $womenCat ? $womenCat->products : collect();

        return view('home', compact('menProducts', 'womenProducts'));
    }
}
