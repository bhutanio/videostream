<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('title');
            $table->mediumText('description');
            $table->string('file_hash')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();
            $table->boolean('published')->unsigned()->default(false);
            $table->bigInteger('created_by')->unsigned();
            $table->index('created_by');
            $table->timestamps();
        });

        Schema::create('video_configs', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('video_id')->unsigned();
            $table->foreign('video_id')->references('id')->on('videos');
            $table->string('file_hash');
            $table->string('file_name');
            $table->string('file_path');
            $table->decimal('duration', 20, 6)->unsigned();
            $table->string('video_codec');
            $table->integer('video_width')->unsigned();
            $table->integer('video_height')->unsigned();
            $table->bigInteger('video_bitrate')->unsigned();
            $table->string('audio_codec')->nullable();
            $table->bigInteger('audio_bitrate')->unsigned()->nullable();
            $table->tinyInteger('audio_channels')->unsigned()->nullable();
            $table->bigInteger('audio_sample_rate')->unsigned()->nullable();
            $table->boolean('transcoded')->unsigned()->default(false);
            $table->boolean('pushed')->unsigned()->default(false);
            $table->bigInteger('created_by')->unsigned();
            $table->index('created_by');
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
        Schema::dropIfExists('video_configs');
        Schema::dropIfExists('videos');
    }
}
