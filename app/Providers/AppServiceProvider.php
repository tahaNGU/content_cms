<?php

namespace App\Providers;

use App\Models\admin;
use App\Models\permissions;
use App\Models\province;
use App\Rules\subid_in_catid;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        View::composer(['admin.*', 'components.admin.*'], function ($view) {
            $view->with([
                'prefix_component' => 'components.admin.',
            ]);
        });
        Paginator::useBootstrapFour();
        View::composer(["site.auth.user.change_profile"], function ($view) {
            $view->with([
                'provinces' => province::all(),
                'genders' => trans("common.gender")
            ]);
        });
        view()->composer('*', function ($view) {
            $view_name = str_replace('.', '-', $view->getName());
            view()->share('view_name', $view_name);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        permissions::get()->each(function ($permission) {
            Gate::define($permission["permission_kind"], function (admin $admin) use ($permission) {
                if ($admin["id"] == "1") {
                    return true;
                }
                return $admin->role->permission()->where("title", $permission["title"])->where("module", $permission["module"])->count();
            });
        });
    }
}
