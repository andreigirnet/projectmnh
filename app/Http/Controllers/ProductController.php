<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
//        $products = Product::orderBy('id', 'asc')->get();
//        return view('pages.back.products', compact('products'));
    }

    public function info(): Response
    {
        $data = DB::select("SELECT sum(paid) as total FROM orders");
        $converted = $data[0]->total;
        dd($converted);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('pages.admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required'
        ]);
        $status = $request->has('status') ? 1 : 0;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/productAdd'), $imageName);
        $price = floatval($request->input('price'));
        $slug = Str::slug($request->product_name, '-');
        // Create a new Product instance
        $product = new Product([
            'name' => $request->input('product_name'),
            'image' => $imageName,
            'slug' => $slug,
            'durationTraining' => $request->input('duration'),
            'certificateValidity' => $request->input('validity'),
            'trainer'=> $request->trainer,
            'status' => $status,
            'price' => $price,
            'description' => $request->input('description'),
        ]);

        $product->save();
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('front.product')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('pages.admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        if($request->image){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/productAdd'), $imageName);
        }
        if($request->image) {
            $product->update([
                'name' => $request->input('product_name'),
                'durationTraining' => $request->input('duration'),
                'certificateValidity' => $request->input('validity'),
                'trainer' => $request->input('trainer'),
                'image' => $imageName,
                'status' => $request->input('status'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                // Add other fields as needed
            ]);
        }else{
            $product->update([
                'name' => $request->input('product_name'),
                'durationTraining' => $request->input('duration'),
                'certificateValidity' => $request->input('validity'),
                'trainer' => $request->input('trainer'),
                'status' => $request->input('status'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                // Add other fields as needed
            ]);
        }

        return redirect(route('home'))->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        //
    }
}
