<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index',[
            'blogs' => SpladeTable::for(Blog::class)
                ->column('title',label: 'Заголовок')
                ->column('action',label:'Действие', canBeHidden: false)
                ->withGlobalSearch(columns: ['name'])
                ->paginate(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $blog = new Blog();
        $blog->image = $request->file('image')->store('public');
        $blog->title = $request->input('title');
        $blog->text = $request->input('text');
       $blog->save();
       Toast::title('Блог создан');
       return redirect()->route('blog.index');

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
    public function edit(Blog $blog)
    {
        return view('blog.edit' , compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->title = $request->input('title');
        $blog->text = $request->input('text');
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public', $filename);
            $blog->image = $filename;
        }
        $blog->save();
        Toast::title('Блог был успешно изменен');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        Toast::title('Блог удален');
        return redirect()->route('blog.index');
    }
}
