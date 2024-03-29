<?php

namespace App\Providers;

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


//
//        Validator::extend('contains_laravel', function ($attribute, $value, $parameters, $validator) {
//            return (new subid_in_catid())->passes($attribute, $value);
//        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
