<?php
namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'rating'  => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        // karena global review, tidak ada product_id
        $data['user_id'] = auth()->id();

        Review::create($data);

        return back()->with('success', 'Terima kasih atas review Anda!');
    }
}
