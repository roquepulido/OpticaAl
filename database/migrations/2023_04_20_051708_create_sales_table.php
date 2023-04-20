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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string("folio")->unique();
            $table->foreignId("store_id")->constrained("stores");
            $table->foreignId("employee_id")->constrained("employees");
            $table->foreignId("customer_id")->constrained("customers");
            $table->date("purchase_date");
            $table->date("sent_lab_date");
            $table->date("delivery_date");
            $table->text('comments');
            $table->text('warranty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
