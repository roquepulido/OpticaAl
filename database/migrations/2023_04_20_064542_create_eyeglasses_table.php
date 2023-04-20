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
        Schema::create('eyeglasses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('frame_id')->constrained("frames");
            $table->foreignId('left_lent_id')->constrained("lenses");
            $table->foreignId('rigth_lent_id')->constrained("lenses");
            $table->foreignId('treatment_id')->constrained('treatments');
            $table->foreignId("folio_id")->constrained("sales");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eyeglasses');
    }
};
