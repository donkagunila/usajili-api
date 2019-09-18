<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCertificate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('openings', function (Blueprint $table) {
            $table->integer('certificate')->nullable();
            $table->string('fee')->nullable();
            $table->string('promotion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('openings', function (Blueprint $table) {
            $table->dropColumn(['certificate', 'fee', 'promotion']);
        });
    }
}
