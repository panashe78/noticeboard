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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->string('item_type');
            $table->string('logo');
            $table->string('product');
            $table->string('address');
            $table->string('vat');
            $table->string('lifespan');
            $table->string('quantity');
            $table->string('transport');
            $table->string('images');
            $table->string('condition');
            $table->string('phonenumber');
            $table->string('lowner');
            $table->string('coverphoto');
            $table->decimal('starting_bid', 10, 2);
            $table->decimal('current_bid', 10, 2)->default(0);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('deadline'); // Deadline for bids
            $table->boolean('is_active')->default(true); // Auction status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auctions');
    }
};

