<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $categories = Category::where('status', 1)->where('category_parent','0')->get();
            $view->with(compact('categories'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
