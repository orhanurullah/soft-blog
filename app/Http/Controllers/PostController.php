<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Keyword;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id', 0)->get();
        return view('admin.posts.create', ['categories' => $categories]);
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
        $post = new Post($this->validatePost());
        $post->title = $request->title;
        $post->slug = Str::slug($post->title);
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;
        $post->keyword_id = $keyword->id;
        $post->category_id = $request->category_id;
        $post->is_active = $request->is_active;
        $post->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug_c, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $parentCategory = $this->getParentCategory($post->category);
        $next = Post::where('category_id', $post->category->id)
        ->where('id', '>', $post->id)
        ->orderBy('id')->first();
        $previos = Post::where('category_id', $post->category->id)
        ->where('id', '<', $post->id)
        ->orderByDesc('id')->first();

        if(!isset($previos) and ($this->getSiblingCategories($post->category) !== 0)){
            foreach($this->getSiblingCategories($post->category) as $sibling){
                if($sibling->id < $post->category->id){
                    $previos = Post::where('category_id', $sibling->id)
                    ->orderByDesc('id')->first();
                    break;
                }else{
                 $previos = Post::where('category_id', $post->category->parent->id)
                 ->orderByDesc('id')->first();

             }
         }
     }
     if(!isset($next) and !empty($post->category->children->first())){
        $next = Post::where('category_id', $post->category->children->first()->id)
        ->orderBy('id')->first();


    }elseif(!isset($next) and ($post->category->parent_id !== 0) and (count($this->getSiblingCategories($post->category)) > 1)){
        foreach($this->getSiblingCategories($post->category) as $sibling){
            if($sibling->id > $post->category->id){
                $next = Post::where('category_id', $sibling->id)
                ->orderBy('id')->first();
                break;
            }
        }
    }
    if(isset($next)){
       $nextCategory = $next->category;
   }else{
        $nextCategory = null;
   }
   if(isset($previos)){
    $previosCategory = $previos->category;
    }else{
        $previosCategory = null;
    }
return view('posts.show', ['category' => $post->category, 'post' => $post, 'next' => $next, 'previos' => $previos, 'nextCategory' => $nextCategory, 'previosCategory' => $previosCategory]);
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::where('id', $id)->firstOrFail();
        return view('admin.posts.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        $keyword = Keyword::find($post->keyword_id);
        $post->update(
            [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'excerpt' => $request->excerpt,
                'content' => $request->content,
                'category_id' => $request->category_id,
                'is_active' => $request->is_active,
            ]
        );
        $keyword->update(
            [
                'content' => $request->keywords
            ]
        );
        return redirect(route('admin.posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
    public function validatePost(){
     return request()->validate([
        'title' => 'required|unique:posts|max:100',
        'excerpt' => 'required|max:255',
        'content' => 'required',
        'category_id' => 'required'
    ]);
 }
 public function getParentCategory($category){
    if($category->parent_id === 0){
        return $category;
    }else{
        $this->getParentCategory($category->parent);
    }
}
public function getSiblingCategories($category){
    if($category->parent_id !== 0){
     $subCategories = Category::where('parent_id', $category->parent_id)->get();
     return $subCategories;
 }else{
    return 0;
}
}

}
