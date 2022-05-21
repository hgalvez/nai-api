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
            $table->string('PartNumber');
            $table->string('SerialNumber')->unique();
            $table->string('LimitID')->nullable();
            $table->string('ILResult_1')->nullable();
            $table->string('ILResult_2')->nullable();
            $table->string('BRResult_1')->nullable();
            $table->string('BRResult_2')->nullable();
            $table->string('SW1')->nullable();
            $table->string('SW2')->nullable();
            $table->string('WaveLength')->nullable();
            $table->timestamp('DT')->nullable();
            $table->string('Tries')->nullable();
            $table->string('Conn')->nullable();
            $table->string('TesterID')->nullable();
            $table->string('UserId')->nullable();
            $table->string('RLA1')->nullable();
            $table->string('RLB1')->nullable();
            $table->string('RLA2')->nullable();
            $table->string('RLB2')->nullable();
            
            
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
        Schema::dropIfExists('multifiber_results');
    }
}
//	WaveLength,	DT,	Tries,	Conn,	TesterID,	UserId,	RLA1,	RLB1,	RLA2,	RLB2)