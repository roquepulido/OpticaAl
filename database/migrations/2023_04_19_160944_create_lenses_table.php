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
        Schema::create('lenses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("tipo");
            $table->string("esfera")->nullable();
            $table->string("cilindro")->nullable();
            $table->string("eje")->nullable();
            $table->string("adicion")->nullable();
            $table->string("altura")->nullable();
            $table->string("dip")->nullable();
            $table->string("laboratorio_id")->nullable();
            $table->string("esmerilado_id")->nullable();
            $table->string("status")->nullable();
            $table->text("comentarios")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lenses');
    }
};
