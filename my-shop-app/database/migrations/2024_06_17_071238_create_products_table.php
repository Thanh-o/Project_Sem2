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
            $table->id();
            $table->string('product_name');
            $table->unsignedBigInteger('cata_id');
            $table->integer('quantity');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('sale', 10, 2)->default(0);
            $table->timestamps();

            $table->foreign('cata_id')->references('cata_id')->on('catalog');
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
