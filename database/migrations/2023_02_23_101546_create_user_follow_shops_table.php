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
        Schema::create('user_follow_shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // The user that follow
            $table->foreignId('shop_id')->constrained('shops'); // The shop that is followed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_follow_shops');
    }
};
