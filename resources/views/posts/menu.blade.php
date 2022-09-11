<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>メニュー</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
    <h1>メニュー</h1>
        @foreach($muscles as $muscle)
            <p>{{ $muscles->muscles_id }}</p>
        @endforeach
        
        @if($muscles->isEmpty())
            <p>{{ "お探しですのプランはありませんでした。他の検索条件を試してみてください。" }}</p>
        @endif
</body>
</html>