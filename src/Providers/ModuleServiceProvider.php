<?php
/**
 * Copyright (c) 2017.
 * *
 *  * Created by PhpStorm.
 *  * User: Edo
 *  * Date: 10/3/2016
 *  * Time: 10:44 PM
 *
 */

namespace BtyBugHook\NewStudio\Providers;

use Btybug\btybug\Models\Routes;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class ModuleServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../views', 'newstudio');
        $this->loadViewsFrom(__DIR__ . '/../views', 'newstudio');
        \Eventy::action('admin.menus', [
            "title" => "New Studios",
            "custom-link" => "#",
            "icon" => "fa fa-anchor",
            "is_core" => "yes",
            "children" => [
                [
                    "title" => "Groups",
                    "custom-link" => "/admin/newstudio",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ]
            ]]);


        Routes::registerPages('btybug.hook/newstudio');
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

    }

}

