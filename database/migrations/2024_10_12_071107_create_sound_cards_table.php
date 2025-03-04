<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoundCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sound_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable(); // Optional field
            $table->string('image')->nullable(); // Optional field
            $table->decimal('price', 8, 2); // Price with 2 decimal points
            $table->string('sku')->unique(); // Unique SKU field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sound_cards');
    }
}
