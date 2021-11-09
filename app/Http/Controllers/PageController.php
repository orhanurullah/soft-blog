<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Keyword;
use App\Models\Code;
use App\Models\Example;
use App\Models\Post;

class PageController extends Controller
{
    public function index(){
        // $setting = Setting::where('id', 1)->firstOrFail();
        // $categories = Category::all();
        // $posts = Post::all();
        // $codes = Code::all();
        // $examples = Example::all();
        // $catthree = Code::where('category_id', 3)->get();
        // return view('welcome', ['setting' => $setting, 'categories' => $categories, 'posts' => $posts, 'codes' => $codes, 'examples' => $examples, 'catthree' => $catthree]);
        return view('index');
    }
    public function author(){
        return view('posts.author');
    }
}
