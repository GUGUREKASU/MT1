<?php
/**
 * @version 2019/03/23-21:30
 * @author Yuuto Kikuchi
 * @author Re:Construction
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mt1NmlPlan extends Model
{
  //==========クエリビルダ==========
  //テーブル名のセット
  protected $table = 'MT1_NML_PLAN';
  //主キーのセット
  protected $guarded = array('PLAN_ID');
  //自動タイムスタンプ挿入の是非
  public $timestamps = true;
}
