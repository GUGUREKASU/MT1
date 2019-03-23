<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeMT1NMLPLANTable extends Migration
{
  /**
   * MT1_NML_PLAN(企画テーブル)変更メソッド
   * @version 2019/03/24-01:00
   * @author Yuuto Kikuchi
   * @author Re:Construction
   * @return void
   */
    public function up()
    {
      Schema::table('MT1_NML_PLAN', function (Blueprint $table) {
          $table->string('PLAN_DESCRIPTION')->change();
          $table->string('EDIT_KEY')->change();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('MT1_NML_PLAN', function (Blueprint $table) {
            //
        });
    }
}
