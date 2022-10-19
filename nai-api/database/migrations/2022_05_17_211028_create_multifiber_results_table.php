<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultifiberResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multifiberresults', function (Blueprint $table) {
            $table->id();
            $table->string('partnumber');
            $table->string('serialnumber')->unique();
            $table->string('limitid')->nullable();
            $table->string('il1310')->nullable();
            $table->string('il1550')->nullable();
            $table->string('rl1310in')->nullable();
            $table->string('rl1310out')->nullable();
            $table->string('rl1550in')->nullable();
            $table->string('rl1550out')->nullable();
            $table->timestamp('dt')->nullable();
            $table->string('conn')->nullable();
            $table->string('testerid')->nullable();
            $table->string('userid')->nullable();
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
        Schema::dropIfExists('multifiberresults');
    }
}
//	WaveLength,	DT,	Tries,	Conn,	TesterID,	UserId,	RLA1,	RLB1,	RLA2,	RLB2)
