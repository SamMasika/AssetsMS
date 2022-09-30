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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignId('vendor_id')->nullable()->constrained('vendors')->cascadeOnDelete()->nullable();
            $table->enum('status',['new','used','broken','repaired'])->default('new');
            $table->enum('flug',['0','1','2','3'])->default('0');
            $table->enum('category',['electronic','furniture','building','vehicles','others'])->nullable();
            $table->boolean('request_type')->default(0);
            $table->text('barcodes')->nullable();
            $table->string('asset_code')->nullable();
            $table->string('serial_code')->nullable();
            $table->string('plate_no')->nullable();
            $table->string('p_price')->nullable();
            $table->string('savage')->nullable();
            $table->string('uta')->nullable();
            $table->timestamp('purchace_date');
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
        Schema::dropIfExists('assets');
    }
};
