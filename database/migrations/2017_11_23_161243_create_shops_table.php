<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shop_name');
            $table->string('mall_id');
            $table->integer('shop_no')->unsigned();
            $table->string('domain');
            $table->string('admin_email');
            $table->string('language_code');
            $table->tinyInteger('use_promotion');
            $table->tinyInteger('use_calculate');
            $table->timestamps();

            $table->unique(['mall_id', 'shop_no'], 'UNIQUE_mallId_shopNo');

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
        Schema::table('shops', function (Blueprint $table) {
            Schema::dropIfExists('shops');
        });
    }
}
