<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_groups', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('group');
            $table->string('group_code');
            $table->text('description')->nullable()->default(null);
        });

        DB::table('user_groups')->delete();
        $user_groups = [
            [
                'group'      => "Super Admin",
                'group_code' => "SU",
            ],
            [
                'group'      => "Admin",
                'group_code' => "ADMIN",
            ],
            [
                'group'      => "Moderator",
                'group_code' => "MODERATOR",
            ],
            [
                'group'      => "Staff",
                'group_code' => "STAFF",
            ],
            [
                'group'      => "Editor",
                'group_code' => "EDITOR",
            ],
            [
                'group'      => "Member",
                'group_code' => "MEMBER",
            ],
            [
                'group'      => "Banned",
                'group_code' => "BANNED",
            ],
        ];
        DB::table('user_groups')->insert($user_groups);

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('user_groups');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('active')->unsigned()->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::unprepared("INSERT INTO `users` (`id`, `group_id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, '4', 'system', 'system@example.com', '', NULL, NOW(), NULL);");
        DB::unprepared("INSERT INTO `users` (`id`, `group_id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, '1', 'admin', 'admin@example.com', '', NULL, NOW(), NULL);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_groups');
    }
}
