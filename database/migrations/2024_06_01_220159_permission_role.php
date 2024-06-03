<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists("permission");
        Schema::create("permissions",function (Blueprint $table){
            $table->id();
            $table->string("title")->unique();
            $table->string("module");
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create("roles",function (Blueprint $table){
            $table->id();
            $table->string("title");
            $table->enum("is_main",["0","1"])->default("0");
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create("permission_role",function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('permission_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("permissions");
        Schema::dropIfExists("roles");
        Schema::dropIfExists("permission_role");
    }
};
