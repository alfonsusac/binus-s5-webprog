<?php

namespace App\Providers;

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
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
        $view = new ViewController();
        $view->setCategory();
        $data = $view->getCategory();
        View::share('categories',$data);
    }
}
