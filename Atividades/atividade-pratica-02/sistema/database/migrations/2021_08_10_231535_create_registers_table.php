<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('registers', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('equipament_id')->nullable(false);
      $table->unsignedBigInteger('user_id')->nullable(false);
      $table->string('description', 191)->nullable(false);
      $table->date('limit_date');
      $table->string('type');
      $table->timestamps();

      $table->foreign('equipament_id')
        ->references('id')
        ->on('equipaments');

      $table->foreign('user_id')
        ->references('id')
        ->on('users');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('registers');
  }
}
