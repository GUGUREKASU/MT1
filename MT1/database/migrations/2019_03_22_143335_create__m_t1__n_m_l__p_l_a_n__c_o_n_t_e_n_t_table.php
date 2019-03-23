<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMT1NMLPLANCONTENTTable extends Migration
{
  /**
   * MT1_NML_PLAN_CONTENT(コンテンツテーブル)作成メソッド
   * @version 2019/03/22-23:20
   * @author Yuuto Kikuchi
   * @author Re:Construction
   * @return void
   */
    public function up()
    {
        Schema::create('MT1_NML_PLAN_CONTENT', function (Blueprint $table) {
            $table->increments('CONTENT_ID')->comment('コンテンツID');
            $table->string('CONTENT_SORT_NUMBER')->comment('コンテンツ並び順');
            $table->string('PLAN_ID')->comment('企画ID');
            $table->string('CATEGORY_ID')->comment('カテゴリーID');
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
        Schema::dropIfExists('MT1_NML_PLAN_CONTENT');
    }
}
