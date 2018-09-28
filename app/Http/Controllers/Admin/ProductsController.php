<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\StoreProductRequest;
use App\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProductsController
 * @package App\Http\Controllers\Admin
 */
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s = $request->input('s');

        $products = Product::latest()->search($s)->paginate(5);

        return view('admin.product.index', compact('products', 's'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->except('file');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('public/uploads');
        }

        Product::create($data);
        return redirect(route('admin.product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreProductRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(StoreProductRequest $request, Product $product): RedirectResponse
    {
        $userData = $request->except('file');
        if ($request->hasFile('image')) {
            Storage::delete($product->image);
            $userData['image'] = $request->file('image')->store('public/uploads');
        }

        $product->fill($userData);
        $product->save();

        return redirect(route('admin.product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Product $product): RedirectResponse
    {
        Storage::delete($product->image);
        $product->delete();

        return back();
    }
}
