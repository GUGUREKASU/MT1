<?php
/**
 * @version 2019/03/23-21:30
 * @author Yuuto Kikuchi
 * @author Re:Construction
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//MT1_NML_PLANモデルクラス
use App\Models\Mt1NmlPlan;

class PlanPostController extends Controller
{
  /**
   * 新規登録画面初期表示
   * @version 2019/03/23-21:30
   * @author Yuuto Kikuchi
   * @author Re:Construction
   */
  public function add()
  {
    return view('planPost.add');
  }

  /**
   * MT1_NML_PLANにデータを格納
   * @version 2019/03/23-21:30
   * @author Yuuto Kikuchi
   * @author Re:Construction
   */
  public function create(Request $request)
  {
    $this->validate($request, [
      'planName'  => 'required',
      'createUser' => 'required',
    ]);

    // MT1_NML_PLANモデルのインスタンス化
    $mt1NmlPlan = new Mt1NmlPlan;
    $mt1NmlPlan->PLAN_NAME = $request->planName;
    $mt1NmlPlan->PLAN_DESCRIPTION = $request->planDescription;
    $mt1NmlPlan->CREATE_USER = $request->createUser;
    $mt1NmlPlan->EDIT_KEY = $request->editKey;
    $mt1NmlPlan->save();
    return redirect('/');
  }
}
