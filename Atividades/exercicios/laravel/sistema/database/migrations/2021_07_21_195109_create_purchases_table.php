<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('purchases', function (Blueprint $table) {
      $table->id();
      $table->string('name', 100)->nullable(false);
      $table->unsignedBigInteger('people_id')->nullable(false);
      $table->unsignedBigInteger('product_id')->nullable(false);
      $table->timestamps();

      $table->foreign('people_id')
        ->references('id')
        ->on('people');

      $table->foreign('product_id')
        ->references('id')
        ->on('products');

      $table->date('date');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('purchases');
  }
}
