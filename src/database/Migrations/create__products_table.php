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
            $table->foreignId('productcategory_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('warehouse_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('diller_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->decimal('price',7,2);
            $table->text('description');
            $table->string('photo');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_products');
    }
};
