<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
//            $table->bigInteger('id')
//                ->unsigned()
//                ->autoIncrement()
//                ->primary();
            $table->id();
            $table->string('name',50);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)
                ->unique()
//                ->default('emty news')
                ->nullable(false);
            $table->text('content')
                ->nullable(true);
//            $table->bigInteger('category')
//                ->unsigned()
//                ->index();
            $table->unsignedBigInteger('category')
                ->index();
            $table->foreign('category')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict');
            $table->string('img')
                ->nullable(true)
                ->default('no image');
            $table->string('source', 250)
                ->nullable(true);
            $table->integer('views')
                ->nullable(true)
                ->default(0);
            $table->dateTime('published');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('news');
    }
}
