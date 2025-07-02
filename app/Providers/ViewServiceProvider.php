<?php 
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Menu;

class ViewServiceProvider extends ServiceProvider
     
{
    public function boot()
    {
        // Share $menus with all views
        View::composer('*', function ($view) {
            $menus = \App\Models\Menu::whereNull('parent_id')->with('children')->get();
            $view->with('menus', $menus);
        });
    }

    public function register()
    {
        //
    }
}
