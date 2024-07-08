<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Text;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $categories = Category::all();  $blogs = Blog::all(); $abouts = About::all(); $texts = Text::all(); return view('frontend.index', compact('categories','blogs', 'abouts','texts'));
    }

    public function blog(){
        $blogs = Blog::all(); return view ('frontend.blog',compact('blogs'));

    }

    public function product(){
        $categories = Category::pluck('name','id')->toArray();
        $products = Product::all(); return view ('frontend.product',compact('products','categories'));

    }
    public function blog_card($id){
        $blogs = Blog::where('id', $id)->first();    return view('frontend.blog_card', compact('blogs'));
    }
    public function product_full($id){
        $products = Product::where('id',$id)->first();  return view('frontend.product_full', compact('products'));
    }
}
