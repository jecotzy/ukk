<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review; 
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

    // ProductController.php
    public function shop()
    {
        // Ambil produk dan kategori seperti biasa
        $products = Product::with(['primaryCategory', 'secondaryCategory'])->get();
    
        // Kelompokkan produk berdasarkan kategori utama
        $groupedByPrimary = $products->groupBy(fn($p) => $p->primaryCategory->category_name ?? 'Others');
        $groupedProducts = [];
        
        // Kelompokkan lebih lanjut berdasarkan kategori sekunder
        foreach ($groupedByPrimary as $primary => $prods) {
            $groupedProducts[$primary] = $prods->groupBy(fn($p) => $p->secondaryCategory->category_name ?? 'Others');
        }
    
        // Ambil produk terbaru (5 produk terakhir)
        $newArrivals = Product::orderBy('created_at', 'desc')->take(5)->get();
    
        // Ambil statistik review global
        $reviews = Review::with('user')->latest()->take(3)->get();
        $totalReviews   = $reviews->count();
        $avgRating      = $reviews->avg('rating');
        $countsByRating = $reviews
            ->groupBy('rating')
            ->map(fn($group) => $group->count());
    
        $percentByRating = $countsByRating
            ->map(fn($cnt) => $totalReviews
                ? round($cnt / $totalReviews * 100, 1)
                : 0
            );
    
        return view('shop', compact(
            'groupedProducts', // Pastikan $groupedProducts sudah terdefinisi
            'newArrivals',
            'reviews',
            'totalReviews',
            'avgRating',
            'countsByRating',
            'percentByRating'
        ));
    }
    

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('show', compact('product'));
    }

    
    

}
