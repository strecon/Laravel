<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFbKeyToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('id_in_soc', 20)
                ->default('');
            $table->enum('type_auth', ['site', 'vk', 'fb', 'gmail'])
                ->default('site');
            $table->string('avatar', 150)
                ->default('')
                ->comment('avatar link');
            $table->index('id_in_soc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex('id_in_soc');
            $table->dropColumn('id_in_soc');
            $table->dropColumn('type_auth');
            $table->dropColumn('avatar');
        });
    }
}
