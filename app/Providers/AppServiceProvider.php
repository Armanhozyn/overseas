<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Page;
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
        view()->composer('layouts.index', function ($view) {
            $view->with('menus', Menu::with('submenus.page')->where('status', 1)->orderBy('id', 'asc')->distinct()->get());
            $view->with('pages', Page::where('status', 1)->select('id', 'submenu_id')->orderBy('id', 'asc')->distinct()->get());
        });
    }
}
