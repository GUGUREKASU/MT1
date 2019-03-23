<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeMT1NMLPLANTable extends Migration
{
  /**
   * MT1_NML_PLAN(企画テーブル)変更メソッド
   * @version 2019/03/24-00:30
   * @author Yuuto Kikuchi
   * @author Re:Construction
   * @return void
   */
    public function up()
    {
        Schema::table('MT1_NML_PLAN', function (Blueprint $table) {
            $table->text('PLAN_DESCRIPTION')->nullable()->change();
            $table->text('EDIT_KEY')->nullable()->change();
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
          $table->text('PLAN_DESCRIPTION')->nullable(false)->change();
          $table->text('EDIT_KEY')->nullable(false)->change();
        });
    }
}
