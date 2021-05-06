<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->decimal('price', 10, 2)->default(0)->nullable();
            $table->decimal('old_price', 10, 2)->default(0)->nullable();
            $table->text('details_small')->nullable();
            $table->text('details_long')->nullable();
            $table->string('images')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
