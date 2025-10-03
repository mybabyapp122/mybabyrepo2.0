<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedCommentsDeletedLogsTable extends Migration
{
    public function up()
    {
        Schema::create('feed_comments_deleted_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('comment_id');
            $table->unsignedBigInteger('feed_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('deleted_by');
            $table->text('comment_text')->nullable();
            $table->datetime('deleted_at');
            
            $table->index('comment_id');
            $table->index('feed_id');
            $table->index('user_id');
            $table->index('deleted_by');
        });
    }

    public function down()
    {
        Schema::dropIfExists('feed_comments_deleted_logs');
    }
}
