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

    public function shop()
    {
        // Ambil semua produk sekaligus, beserta primaryCategory dan secondaryCategory
        $products = Product::with(['primaryCategory', 'secondaryCategory'])->get();
    
        // Kelompokkan berdasarkan primary category (Women, Men, Kids, Sale)
        $groupedByPrimary = $products->groupBy(function($product) {
            return $product->primaryCategory->category_name ?? 'Others';
        });
    
        // Lalu masing-masing kategori besar (Women, Men, Kids, Sale) juga dikelompokkan lagi berdasarkan secondary category
        $groupedProducts = [];
        foreach ($groupedByPrimary as $primaryCategory => $products) {
            $groupedProducts[$primaryCategory] = $products->groupBy(function($product) {
                return $product->secondaryCategory->category_name ?? 'Others';
            });
        }
    
        // New Arrivals
        $newArrivals = Product::orderBy('created_at', 'desc')->take(5)->get();
    
        return view('shop', compact('groupedProducts', 'newArrivals'));
    }
    
    
    

}
