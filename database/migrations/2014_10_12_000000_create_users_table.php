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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('user_id', 32)->nullable();

            $table->enum('type', [
                'admin',
                'reporter',
                'visitor'
            ])->comment('user type');

            $table->unsignedInteger('role_id')->nullable()->default(null);

            $table->string('en_first_name', 255)->nullable();
            $table->string('en_last_name', 255)->nullable();

            $table->string('bn_first_name', 255)->nullable();
            $table->string('bn_last_name', 255)->nullable();

            $table->string('email', 255)->nullable();
            $table->tinyInteger('email_verified')->default(0)->comment('0=no,1=yes');
            $table->timestamp('email_verified_at')->nullable()->default(null);

            $table->string('phone', 255)->nullable();
            $table->tinyInteger('phone_verified')->default(0)->comment('0=no,1=yes');
            $table->timestamp('phone_verified_at')->nullable()->default(null);

            $table->string('phone_2', 255)->nullable();
            $table->string('validation_code', 255)->nullable();

            $table->string('password', 255)->nullable();

            $table->rememberToken();

            $table->string('google_login_id', 255)->nullable()->default(null);
            $table->string('facebook_login_id', 255)->nullable()->default(null);

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
        Schema::dropIfExists('users');
    }
};
