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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->enum('source', [
                'Производство',
                'Склад',
            ]);

            $table->integer('count')->nullable();
            $table->integer('laser')   ->nullable()->default(0);
            $table->integer('welding') ->nullable()->default(0);
            $table->integer('cleaning')->nullable()->default(0);
            $table->integer('assembly')->nullable()->default(0);
            $table->integer('electr')  ->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
