<?php

namespace App\Providers;

use App\Sports;
use Illuminate\Support\ServiceProvider;
use View;
use App\Showing;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function ($view){
            $view->with('publishedShowings',Showing::where('publication_status',1)->get());

        });
        View::composer('*',function ($view){
            $view->with('publishedCategories',Category::where('publication_status',1)->get());

        });

        View::composer('*',function ($view){
            $view->with('sportsCategories',Sports::where('publication_status',1)->get());

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
