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
        Schema::create('maombis', function (Blueprint $table) {
            $table->id();
            $table->string('asset_name');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('depart_id')->constrained('departments')->cascadeOnDelete();
            $table->enum('category',['electronic','furniture','building','vehicles','others'])->nullable();
            $table->enum('status',['0','1','2','3'])->default('0');
            $table->text('remark')->nullable();
            $table->text('specification');
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
        Schema::dropIfExists('maombis');
    }
};
