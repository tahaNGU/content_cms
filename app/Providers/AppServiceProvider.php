<?php

namespace App\Providers;

use App\Models\province;
use App\Rules\subid_in_catid;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        View::composer(['admin.*','components.admin.*'], function($view) {
            $view->with([
                'prefix_component' => 'components.admin.',
            ]);
        });
        Paginator::useBootstrapFour();

        View::composer(["site.auth.user.change_profile"],function ($view){
            $view->with([
                'provinces'=>province::all(),
                'genders'=>trans("common.gender")
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
