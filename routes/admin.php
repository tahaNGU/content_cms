<?php

use App\Http\Controllers\admin\content_controller;
use App\Http\Controllers\admin\manager_controller;
use App\Http\Controllers\admin\news_cat_controller;
use App\Http\Controllers\admin\news_controller;
use App\Http\Controllers\admin\permission_controller;
use App\Http\Controllers\admin\premission;
use App\Http\Controllers\admin\province_city_controller;
use \Illuminate\Support\Facades\Route;

include "auth_admin.php";


Route::middleware("auth:admin")->group(function () {

    Route::view("/base", "admin.layout.base")->name("admin.base");
    Route::view("/error", "admin.layout.errors.404")->name("admin.error404");
    Route::post("province_city",province_city_controller::class)->name("province_city");
    Route::resource("news_cat", news_cat_controller::class)->except("show");
    Route::post("news_cat/action_all", [news_cat_controller::class, "action_all"])->name("news_cat.action_all");
    Route::resource("news", news_controller::class)->except("show");
    Route::post("news/action_all", [news_controller::class, "action_all"])->name("news.action_all");
    Route::resource("manager", manager_controller::class)->except("show");
    Route::post("manager/action_all", [manager_controller::class, "action_all"])->name("manager.action_all");
    Route::resource("permission", permission_controller::class)->except("show");
    Route::post("permission/action_all", [permission_controller::class, "action_all"])->name("permission.action_all");






    Route::prefix("content/{item_id}/{module}/")->as("content.")->group(function () {
        Route::get("create", [content_controller::class, 'create'])->name("create");
        Route::post("store", [content_controller::class, 'store'])->name("store");
        Route::get("list", [content_controller::class, 'list'])->name("list");
        Route::post("action_all", [content_controller::class, "action_all"])->name("action_all");
        Route::delete("destroy", [content_controller::class, "destroy"])->name("destroy");
        Route::get("edit", [content_controller::class, 'edit'])->name("edit");
        Route::post("update", [content_controller::class, 'update'])->name("update");
    });
});
