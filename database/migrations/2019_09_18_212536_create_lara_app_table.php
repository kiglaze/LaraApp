<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateLaraAppTable
 *
 * Quick NOTES on migrations:
 *
 * php artisan migrate
 * Sets part of name for migration file.
 *  This creates a table named lara_app by default (in generated up function).
 * php artisan make:migration create_lara_app_table
 * This runs the migration by running the up() function.
 * php artisan migrate
 * This rolls back the most recent migration by running the down() function.
 * php artisan migrate:rollback
 *
 * Sometimes if the down() function is not implemented, php artisan migrate:fresh might be used,
 * but don't ever run it on production.
 */
class CreateLaraAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lara_app', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
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
        Schema::dropIfExists('lara_app');
    }
}
