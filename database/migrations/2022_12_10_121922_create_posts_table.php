<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->enum('language', ['en', 'bn'])->default('bn');
            $table->tinyInteger('related_post_type')->default(0)->comment("0=Auto,1=Manual");

            $table->unsignedInteger('post_category_id')->nullable();
            $table->unsignedInteger('post_sub_category_id')->nullable();
            $table->unsignedInteger('post_child_category_id')->nullable();

            $table->unsignedInteger('division_id')->nullable();
            $table->unsignedInteger('district_id')->nullable();
            $table->unsignedInteger('thana_id')->nullable();

            $table->string('title', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('subtitle', 255)->nullable();
            $table->text('first_description')->nullable();
            $table->text('second_description')->nullable();

            $table->string('seo_meta_keyword', 255)->nullable();
            $table->string('post_tags', 255)->nullable();
            $table->text('seo_meta_description')->nullable();

            $table->unsignedInteger('featured_image_id')->nullable();

            $table->string('youtube_video_link', 255)->nullable();
            $table->string('soundcloud_audio_link', 255)->nullable();


            $table->tinyInteger('is_featured')->default(0)->comment('0=no,1=yes');
            $table->tinyInteger('is_featured_left')->default(0)->comment('0=no,1=yes');
            $table->tinyInteger('is_featured_right')->default(0)->comment('0=no,1=yes');
            $table->tinyInteger('is_breaking_news')->default(0)->comment('0=no,1=yes');

            $table->unsignedTinyInteger('post_status')->default(0)->comment('0=draft,1=published,2=pending');
            $table->unsignedInteger('author_id')->nullable();

            $table->tinyInteger('is_schedule')->default(0)->comment('0=no,1=yes');
            $table->timestamp('publish_at')->nullable();

            $table->tinyInteger('status')->default(1)->comment('1=active,0=inactive');
            $table->timestamp('created_at')->nullable()->default(null);
            $table->unsignedInteger('created_by')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->unsignedInteger('updated_by')->nullable()->default(null);
            $table->tinyInteger('deleted')->default(0)->comment('0=no,1=yes');
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->unsignedInteger('deleted_by')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
