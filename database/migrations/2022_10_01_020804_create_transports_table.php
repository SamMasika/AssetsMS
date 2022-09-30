<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assets_id')->constrained('assets')->cascadeOnDelete();
            $table->enum('transport_type',['vehicle','bajaj','motorcycle','bicycle',])->nullable();
            $table->string('cheses_no');
            $table->string('reg_no');
            $table->string('engine_no');
            $table->string('engine_capacity')->nullable();
            $table->string('manufactured_year')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('transports');
    }
};
