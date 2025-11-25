<?php

// in database/migrations/YYYY_MM_DD_XXXXXX_create_comments_table.php

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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            
            // This is the link back to the Post
            $table->foreignId('post_id')
                  ->constrained()
                  ->onDelete('cascade'); // If a post is deleted, delete its comments too.

            // This is the content of the comment
            $table->text('body'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};