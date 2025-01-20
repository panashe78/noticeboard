<?php

// database/migrations/2023_01_06_000000_create_notifications_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-incrementing ID
            $table->string('type'); // The type of notification
            $table->text('data'); // JSON data associated with the notification
            $table->morphs('notifiable'); // Polymorphic relationship fields
            $table->timestamps(); // Created and updated timestamps
            $table->softDeletes(); // To allow soft deletion
            
            // Add the read_at column
            $table->timestamp('read_at')->nullable(); // Nullable timestamp for when the notification was read
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications'); // Drop the table if it exists
    }
}
