<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>TODOアプリ</title>
</head>
<body>
    <h1>TODOアプリ</h1>

    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="title" placeholder="タスクを入力" required>
        <button type="submit">追加</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }}
                @if (!$task->is_done)
                    <form action="/tasks/{{ $task->id }}/complete" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit">完了</button>
                    </form>
                @endif
                <form action="/tasks/{{ $task->id }}/delete" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">削除</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>

