<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDeletedAtExperiences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
}
