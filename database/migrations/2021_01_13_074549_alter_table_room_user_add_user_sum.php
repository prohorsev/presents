<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableRoomUserAddUserSum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_user', function (Blueprint $table) {
            $table->unsignedBigInteger('sum')->default(0)->comment('Вклад юзера');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_user', function (Blueprint $table) {
            $table->dropColumn('sum');
        });
    }
}
