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
        Schema::create('categoties', function (Blueprint $table) {
//            $table->bigInteger('id')
//                ->unsigned()
//                ->autoIncrement()
//                ->primary();
            $table->id();
            $table->string(150);
            // пометка на удаление
//            $table->softDeletes()
            $table->timestamps();
        });

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)
                ->unique()
                ->nullable(false);
            $table->text('content')
                ->nullable(true);
            $table->bigInteger('category')
                ->unsigned()
                ->index();
            $table->foreign('category')
                ->references('id')
                ->on('categories');
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
