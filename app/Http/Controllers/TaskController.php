<?php

namespace App\Http\Controllers;

use App\Models\Task; // Taskモデルを使う場合
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // タスク一覧を取得（モデルがまだ無ければ仮の配列でもOK）
        $tasks = Task::orderBy('created_at', 'desc')->get();

        // ビューに $tasks を渡す
        return view('tasks.index', compact('tasks'));
    }

    public function complete($id)
    {
        $task = Task::findOrFail($id);
        $task->is_done = true;
        $task->save();
        return redirect('/');
    }

    // 他のメソッドも追加してください
}
