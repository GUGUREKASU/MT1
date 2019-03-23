<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMT1NMLPLANPOSTTable extends Migration
{
  /**
   * MT1_NML_PLAN_POST(投稿テーブル)作成メソッド
   * @version 2019/03/22-23:20
   * @author Yuuto Kikuchi
   * @author Re:Construction
   * @return void
   */
    public function up()
    {
        Schema::create('MT1_NML_PLAN_POST', function (Blueprint $table) {
            $table->increments('POST_ID')->comment('投稿ID');
            $table->string('POST_SORT_NUMBER')->comment('投稿並び順');
            $table->string('PLAN_ID')->comment('企画ID');
            $table->string('CATEGORY_ID')->comment('カテゴリーID');
            $table->string('POST_DETAIL')->comment('投稿詳細');
            $table->string('CREATE_USER')->comment('作成者');
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
        Schema::dropIfExists('MT1_NML_PLAN_POST');
    }
}
