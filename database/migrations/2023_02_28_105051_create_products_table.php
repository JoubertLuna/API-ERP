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
    Schema::create('products', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('produto')->unique();
      $table->string('eh_produto', 1)->default('1'); // 1 = sim - 0 = não;
      $table->string('eh_insumo', 1)->default('0'); // 1 = sim - 0 = não
      $table->decimal('valor_compra', 10, 2)->default(0.00);
      $table->decimal('valor_venda', 10, 2)->default(0.00);
      $table->string('codigo_interno', 8)->nullable();
      $table->string('gtin', 8)->nullable();
      $table->string('imagem')->nullable();
      $table->string('ativo', 1)->default('1'); // 1 = sim - 0 = não
      $table->uuid('category_id')->index();
      $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
      $table->uuid('unity_id')->index();
      $table->foreign('unity_id')->references('id')->on('unities')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('products');
  }
};
