<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaiassemblyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naiassembly', function (Blueprint $table) {
            $table->id();
            $table->string('serialnumber')->unique();
            $table->string('partnumber');
            $table->string('descrip')->nullable();
            $table->string('connector')->nullable();
            $table->string('il_limit')->nullable();
            $table->string('rl_limit')->nullable();
            $table->string('wavelength')->nullable();
            $table->string('creatorid')->nullable();
            $table->timestamp('creationdate')->nullable();
            $table->string('testerid')->nullable();
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
        Schema::dropIfExists('naiassembly');
    }
}
