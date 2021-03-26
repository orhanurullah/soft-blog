<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         \Illuminate\Support\Facades\View::composer('layouts.mainlayout', function($view){
            $view->with('categories', \App\Models\Category::where('parent_id',0)->get());
             $view->with('setting', \App\Models\Setting::firstOrFail());
        });
         \Illuminate\Support\Facades\View::composer('index', function($view){
            $view->with('categories', \App\Models\Category::where('parent_id',0)->get());
            $view->with('setting', \App\Models\Setting::firstOrFail());
        });
          \Illuminate\Support\Facades\View::composer('sections.deneme', function($view){
            $view->with('categoryList', \App\Models\Category::all());
        });
    }
}
