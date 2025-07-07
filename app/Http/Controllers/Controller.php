<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;   // 認可処理
use Illuminate\Foundation\Bus\DispatchesJobs;              // ジョブ処理
use Illuminate\Foundation\Validation\ValidatesRequests;    // バリデーション処理
use Illuminate\Routing\Controller as BaseController;        // Laravelの基本コントローラークラス

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
