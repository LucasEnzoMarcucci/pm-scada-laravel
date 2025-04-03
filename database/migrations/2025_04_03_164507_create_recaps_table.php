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
    Schema::create('recaps', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->json('data');
      $table->double('total_revenue');
      $table->double('total_cost');
      $table->double('total_profit');
      $table->integer('goal_completions');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('recaps');
  }
};
