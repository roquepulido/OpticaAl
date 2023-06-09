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
        Schema::create('labs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("contact")->nullable();
            $table->string("street")->nullable();
            $table->string("number")->nullable();
            $table->string("suburb")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string('postcode')->nullable();
            $table->string('stateAbbr')->nullable();
            $table->foreignId('kind_work')->nullable()->constrained("kind_works");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labs');
    }
};
