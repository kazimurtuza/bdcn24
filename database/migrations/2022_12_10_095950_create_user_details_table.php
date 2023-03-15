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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');

            /*basic information*/
            $table->string('image', 255)->nullable();
            $table->string('social_facebook', 255)->nullable();
            $table->string('social_twitter', 255)->nullable();
            $table->string('social_linkedin', 255)->nullable();
            $table->string('social_instagram', 255)->nullable();

            $table->string('en_designation', 255)->nullable();
            $table->string('bn_designation', 255)->nullable();

            $table->unsignedInteger('reporter_type_id')->nullable();
            $table->date('joining_date')->nullable();

            $table->string('nid', 32)->nullable();
            $table->string('passport', 32)->nullable();
            $table->string('blood_group', 16)->nullable();
            $table->string('gender', 16)->nullable();


            /*personal information*/
            $table->string('father_name', 255)->nullable();
            $table->string('mother_name', 255)->nullable();
            $table->string('marital_status', 32)->nullable();
            $table->string('nationality', 32)->nullable();
            $table->string('religion', 32)->nullable();
            $table->date('date_of_birth')->nullable();

            $table->string('present_address', 255)->nullable();
            $table->unsignedInteger('present_address_division')->nullable();
            $table->unsignedInteger('present_address_district')->nullable();
            $table->unsignedInteger('present_address_thana')->nullable();
            $table->string('permanent_address', 255)->nullable();
            $table->unsignedInteger('permanent_address_division')->nullable();
            $table->unsignedInteger('permanent_address_district')->nullable();
            $table->unsignedInteger('permanent_address_thana')->nullable();

            /*extra info*/
            $table->string('attachment_nid', 255)->nullable();
            $table->string('attachment_passport', 255)->nullable();
            $table->string('attachment_signature', 255)->nullable();



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
        Schema::dropIfExists('user_details');
    }
};
