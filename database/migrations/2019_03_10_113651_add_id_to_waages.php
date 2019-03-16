<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdToWaages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('waages', function($table) {
            $table->dropColumn('id');
        });

            Schema::table('waages', function($table) {
                $table->increments('id');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('waages', function($table) {
            $table->dropColumn('id');
        });
    }
}
