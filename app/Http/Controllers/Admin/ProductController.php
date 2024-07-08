<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::pluck('name','id')->toArray();
        return view ('product.index',[
            'products' => SpladeTable::for(Product::class)
                ->withGlobalSearch(columns: ['name','price','sale'])
                ->column('name',label: 'Название товара')
                ->selectFilter('category_id', $categories, label: 'Категория',)
                ->column('price', label: 'Цена')
                ->column('sale', label: 'Скидка')
                ->column('action', label: 'Действия')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name','id')->toArray();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->sale = $request->input('sale');
        $product->collection = $request->input('collection');
        $product->manufacturer = $request->input('manufacturer');
        $product->guarantee = $request->input('guarantee');
        $product->expire = $request->input('expire');
        $product->size = $request->input('size');
        $product->sheathing = $request->input('sheathing');
        $product->color = $request->input('color');
        $product->category_id = $request->input('category_id');
        $product->image = $request->file('image')->store('public');
        $product->save();
        Toast::title('Товар создан');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id')->toArray();
        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->sale = $request->input('sale');
        $product->collection = $request->input('collection');
        $product->manufacturer = $request->input('manufacturer');
        $product->guarantee = $request->input('guarantee');
        $product->expire = $request->input('expire');
        $product->size = $request->input('size');
        $product->sheathing = $request->input('sheathing');
        $product->color = $request->input('color');
        $product->category_id = $request->input('category_id');
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public', $filename);
            $product->image = $filename;
        }
        $product->save();
        Toast::title('Продукт был успешно изменен');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Toast::title('Товар удален');
        return redirect()->route('product.index');
    }
}
