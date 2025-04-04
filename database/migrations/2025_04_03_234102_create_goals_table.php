<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('goals', function (Blueprint $table) {
      $table->id();
      $table->integer('products_cart');
      $table->integer('complete_purchase');
      $table->integer('prenium_visits');
      $table->integer('send_inquiries');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('goals');
  }
};
