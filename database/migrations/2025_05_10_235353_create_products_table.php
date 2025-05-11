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
            $table->timestamps();
            $table->string('name');
            $table->string('brand');
            $table->string('silhoutte');
            $table->string('colorway');
            $table->integer('price');
            $table->string('thumbnail');
            $table->date('release_date');
            $table->text('description')->nullable();
            $table->string('category');
            $table->string('subcategory');
            $table->integer('stock');

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
