<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('registros', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('pessoa_id')->nullable(false);
      $table->unsignedBigInteger('unidade_id')->nullable(false);
      $table->unsignedBigInteger('vacina_id')->nullable(false);
      $table->tinyInteger('dose')->nullable(false);
      $table->date('data')->nullable(false);
      $table->timestamps();

      $table->foreign('pessoa_id')
        ->references('id')
        ->on('pessoas');

      $table->foreign('unidade_id')
        ->references('id')
        ->on('unidades');

      $table->foreign('vacina_id')
        ->references('id')
        ->on('vacinas');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('registros');
  }
}
