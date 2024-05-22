<?php

use App\Http\Controllers\admin\bannerController;
use App\Http\Controllers\admin\comment_controller;
use App\Http\Controllers\admin\content_controller;
use App\Http\Controllers\admin\manager_controller;
use App\Http\Controllers\admin\menuController;
use App\Http\Controllers\admin\news_cat_controller;
use App\Http\Controllers\admin\news_controller;
use App\Http\Controllers\admin\permission_controller;
use App\Http\Controllers\admin\premission;
use App\Http\Controllers\admin\product_cat_controller;
use App\Http\Controllers\admin\product_controller;
use App\Http\Controllers\admin\province_city_controller;
use \Illuminate\Support\Facades\Route;

include "auth_admin.php";


Route::middleware("auth:admin")->group(function () {

    Route::view("/base", "admin.layout.base")->name("admin.base");
    Route::view("/error", "admin.layout.errors.404")->name("admin.error404");
    Route::post("province_city", province_city_controller::class)->name("province_city");
    Route::resource("news_cat", news_cat_controller::class)->except("show");
    Route::post("news_cat/action_all", [news_cat_controller::class, "action_all"])->name("news_cat.action_all");
    Route::resource("news", news_controller::class)->except("show");
    Route::post("news/action_all", [news_controller::class, "action_all"])->name("news.action_all");
    Route::resource("manager", manager_controller::class)->except("show");
    Route::post("manager/action_all", [manager_controller::class, "action_all"])->name("manager.action_all");
    Route::resource("permission", permission_controller::class)->except("show");
    Route::post("permission/action_all", [permission_controller::class, "action_all"])->name("permission.action_all");
    Route::resource("comment", comment_controller::class)->except("show","store","create");
    Route::post("comment/action_all", [comment_controller::class, "action_all"])->name("comment.action_all");
    Route::resource("banner", bannerController::class);
    Route::post("banner/action_all", [bannerController::class, "action_all"])->name("banner.action_all");
    Route::prefix("content/{item_id}/{module}/")->as("content.")->group(function () {
        Route::get("create", [content_controller::class, 'create'])->name("create");
        Route::post("store", [content_controller::class, 'store'])->name("store");
        Route::get("list", [content_controller::class, 'list'])->name("list");
        Route::post("action_all", [content_controller::class, "action_all"])->name("action_all");
        Route::delete("destroy", [content_controller::class, "destroy"])->name("destroy");
        Route::get("edit", [content_controller::class, 'edit'])->name("edit");
        Route::post("update", [content_controller::class, 'update'])->name("update");
    });
    Route::resource("comment", comment_controller::class)->except("show","store","create");

    Route::resource("menu", menuController::class);
    Route::post("menu/action_all", [menuController::class, "action_all"])->name("menu.action_all");


    Route::resource("product_cat",product_cat_controller::class)->except("show");
    Route::post("product_cat/action_all",[product_cat_controller::class,"action_all"])->name("product_cat.action_all");


    Route::resource("product",product_controller::class)->except("show");
    Route::post("product/action_all",[product_controller::class,"action_all"])->name("product.action_all");


});
