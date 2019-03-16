<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMillIdToWaages extends Migration
{
    public function up()
    {
        Schema::table('waages', function($table) {
            $table->integer('mill_id')->after("id");
        });
    }


    public function down()
    {
        Schema::table('waages', function($table) {
            $table->dropColumn('mill_id');
        });
    }
}
