<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Start extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests_statuses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->char('title', 255);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
        Schema::create('requests_priorities', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->char('title', 255);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
        Schema::create('requests', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('id_creator');
            $table->foreign('id_creator')->references('id')->on('users');
            $table->bigInteger('id_responsible');
            $table->foreign('id_responsible')->references('id')->on('users');
            $table->bigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('requests_statuses');
            $table->bigInteger('id_priority')->nullable();
            $table->foreign('id_priority')->references('id')->on('requests_priorities');
            $table->text('description');
            $table->char('title', 255);
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
        });
        Schema::create('comments_on_requests', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->text('comment');
            $table->bigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->bigInteger('id_request');
            $table->foreign('id_request')->references('id')->on('requests');
            $table->timestamps();
        });
        Schema::create('roles', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->char('title', 255);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->jsonb('ids_roles')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
