<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        {{--<h1>任务列表</h1>--}}
        {{--<ul>--}}
            {{--@foreach ($tasks as $task)--}}
                {{--<li>--}}
                    {{--<a href="/tasks/{{ $task -> id }}">{{ $task -> name  }}</a>--}}
                    {{--<a href="{{ url("tasks", [$task -> id]) }}">{{ $task -> name  }}</a>--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
        <h1>任务列表</h1>
        <div>
            <h2>未完成</h2>
            <ul>
                @foreach ($unCompletedTasks as $task)
                    <li>
                        <a href="{{ url("tasks", [$task->id]) }}">{{ $task->name  }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div>
            <h2>已完成</h2>
            <ul>
                @foreach ($completedTasks as $task)
                    <li>
                        <a href="{{ url("tasks", [$task->id])}}">{{ $task->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
