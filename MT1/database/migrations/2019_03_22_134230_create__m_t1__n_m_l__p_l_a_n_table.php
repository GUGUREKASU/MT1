<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMT1NMLPLANTable extends Migration
{
    /**
     * MT1_NML_PLAN(企画テーブル)作成メソッド
     * @version 2019/03/22-23:20
     * @author Yuuto Kikuchi
     * @author Re:Construction
     * @return void
     */
    public function up()
    {
        Schema::create('MT1_NML_PLAN', function (Blueprint $table) {
            $table->increments('PLAN_ID')->comment('企画ID');
            $table->string('PLAN_NAME')->comment('企画名');
            $table->string('PLAN_DESCRIPTION')->comment('企画説明');
            $table->string('CREATE_USER')->comment('作成者');
            $table->string('EDIT_KEY')->comment('編集鍵');
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
        Schema::dropIfExists('MT1_NML_PLAN');
    }
}
