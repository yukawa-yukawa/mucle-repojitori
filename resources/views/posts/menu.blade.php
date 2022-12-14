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
        
                <!-- 一致する条件がなければ、次の要件を出す -->
        
                @if($muscles->isempty())
                    <p>トレーニングメニューはありませんでした。他の検索条件を試してみてください。</p>
                @else
        
                <!-- 検索した条件と一致するメニューがあれば表示 --> 
        
                    @foreach($muscles as $muscle)
                        <p><font size="6">{{ $muscle->name->event_name }}</font></p>
                        <img src="{{ asset('img/' . $muscle->name->event_picture) }}" alt="トレーニング"> 
                        <p>{{ $muscle->name->event_precautions }}</p>
                        
                        @inject('common', 'App\Libraries\Common')
                        <p>{{ $common->training_set($muscle->name->id,$max_lifting_weight) }}</p>
                    @endforeach
            
                @endif
    </body>
</html>