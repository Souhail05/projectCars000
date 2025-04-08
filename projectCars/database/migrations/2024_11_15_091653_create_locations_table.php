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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("client_id")->constrainted("clients")->onDelete("cascade");
            $table->foreignId("car_id")->constrainted("cars")->onDelete("cascade");
            $table->date("date_debut");
            $table->date("date_fin");
            $table->decimal("prix_total");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
