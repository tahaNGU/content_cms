<?php

use App\Http\Controllers\admin\content_controller;
use App\Http\Controllers\admin\news_cat_controller;
use App\Http\Controllers\admin\news_controller;
use \Illuminate\Support\Facades\Route;

Route::view("/base", "admin.layout.base")->name("admin.base");

Route::resource("news_cat", news_cat_controller::class)->except("show");
Route::post("news_cat/action_all", [news_cat_controller::class, "action_all"])->name("news_cat.action_all");


Route::resource("news", news_controller::class)->except("show");
Route::post("news/action_all", [news_controller::class, "action_all"])->name("news.action_all");

Route::prefix("content/{item_id}/{module}/")->as("content.")->group(function () {
    Route::get("create", [content_controller::class, 'create'])->name("create");
    Route::post("store", [content_controller::class, 'store'])->name("store");
    Route::get("list", [content_controller::class, 'list'])->name("list");
    Route::post("action_all", [content_controller::class, "action_all"])->name("action_all");
    Route::delete("destroy", [content_controller::class, "destroy"])->name("destroy");
    Route::get("edit", [content_controller::class, 'edit'])->name("edit");
    Route::post("update", [content_controller::class, 'update'])->name("update");
});
