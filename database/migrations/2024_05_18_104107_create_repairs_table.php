<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vehicleID')->unsigned();
            $table->foreign('vehicleID')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('employeeID')->unsigned();
            $table->foreign('employeeID')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->date('repairDate');
            $table->string('description');
            $table->decimal('cost', total: 8, places: 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairs');
    }
};
