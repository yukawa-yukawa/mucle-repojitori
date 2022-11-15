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
                @if($muscles->isempty())
                    <p>トレーニングメニューはありませんでした。他の検索条件を試してみてください。</p>
                @else
        
                    @foreach($muscles as $muscle)
                        <p>{{ $muscle->name->event_name }}</p>
                        <img src="{{ asset('img/' . $muscle->name->event_picture) }}" alt="トレーニング"> 
                        <p>{{ $muscle->name->event_precautions }}</p>
                        
                        @php
                            function training_sets($muscle_id,$max_lifting_weight){
                                @if($muscle_id == 1){
                                    echo $max_lifting_weight*0.6,"を15回"
                                }@elseif($muscle_id == 2){
                                    echo "膝コロ10回2セット、立ちコロ10回1セット"
                                }@else{
                                    echo "限界が来るまで"
                                @endif    
                            }
                        @endphp
                        
                    @endforeach
            
                @endif
    </body>
</html>