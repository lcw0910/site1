<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('shop_idx');
            $table->integer('product_no')->unsigned();
            $table->string('product_code', 25);
            $table->string('product_name', 100);
            $table->text('description');
            $table->decimal('price_decimal', 12, 2);
            $table->float('price_float', 10);
            $table->double('price_double', 12, 2);
            $table->tinyInteger('is_selling');
            $table->tinyInteger('is_display');
            $table->timestamps();

            $table->index(['shop_idx', 'product_no'], 'IDX_shopIdx_productNo');
            $table->index(['shop_idx', 'product_code'], 'IDX_shopIdx_productCode');
            $table->index(['shop_idx', 'is_selling', 'is_display'], 'IDX_isSelling_isDisplay');

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
