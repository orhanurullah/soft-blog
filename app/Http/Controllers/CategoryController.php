<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Keyword;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keyword = Keyword::create([
            'content' => $request->keywords
        ]);
       $category = new Category($this->validateCategory());
       $category->title = $request->title;
       $category->slug = Str::slug($category->title);
       $category->excerpt = $request->excerpt;
       $category->description = $request->description;
       $category->keyword_id = $keyword->id;
       $category->parent_id = $request->parent_id;
       $category->is_active = $request->is_active;
       $category->save();
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('categories.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::all();
        return view('admin.categories.edit', ['category' => $category, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $keyword = Keyword::find($category->keyword_id);
         $category->update(
            [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'excerpt' => $request->excerpt,
                'description' => $request->description,
                'parent_id' => $request->parent_id,
                'is_active' => $request->is_active,
            ]
        );
        $keyword->update(
            [
                'content' => $request->keywords
            ]
        );
        return redirect(route('admin.categories.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
     public function validateCategory(){
         return request()->validate([
            'title' => 'required|unique:categories|max:100',
            'excerpt' => 'required|max:255',
            'description' => 'required',
        ]);
 }
}
