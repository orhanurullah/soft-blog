<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Setting;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
         $setting = Setting::where('id', 1)->firstOrFail();
        if($setting->id !== 1){
            return redirect()->route('admin.settings.create');
        }
        return view('admin.index');
    }
    public function categories(){
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }
}
