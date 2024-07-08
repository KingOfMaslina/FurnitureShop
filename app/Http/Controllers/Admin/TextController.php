<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TextRequest;
use App\Models\About;
use App\Models\Text;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('text.index',[
            'texts' => SpladeTable::for(Text::class)
                ->column('text',label: 'Текст')
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
        return view('text.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TextRequest $request)
    {
        $text = new Text();
        $text->text = $request->input('text');
        $text->image = $request->file('image')->store('public');
        $text->save();
        return redirect()->route('text.index');
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
    public function edit(Text $text)
    {
        return view('text.edit' , compact('text'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Text $text)
    {
        $text->text = $request->input('text');
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public', $filename);
            $text->image = $filename;
        }
        $text->save();
        return redirect()->route('text.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Text $text)
    {
        $text->delete();
        return redirect()->route('text.index');
    }
}
