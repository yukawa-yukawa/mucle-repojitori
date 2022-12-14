<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>筋トレメニュー作成機</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
    <p><font size="6">筋トレメニュー作成機</font></p>
    <form action="/menu" method="get">
        @csrf
        
        <p><label>身長(cm)：<input type="number" id="height"></label></p>

        <p><label>体重(kg)：<input type="number" id="body weight"></label></p>

        <p><label>性別：
            <select name='sex'>
                @foreach((array)$training_sex as $key => $sex)
                    <option value="{{ $key }}">
                        {{$sex}}
                    </option>
                @endforeach
            </select>
        </label></p>
        
        <p><label>トレーニングの目的：
            <select name='objective'>
                @foreach((array)$training_objective as $key => $objective)
                    <option value="{{ $key }}">
                        {{$objective}}
                    </option>
                @endforeach
            </select>
        </label></p>
    
        <p><label>主に鍛えたい部位：
            <select name='part'>
                @foreach((array)$training_part as $key => $part)
                    <option value="{{ $key }}">
                        {{$part}}
                    </option>
                @endforeach
            </select>
        </label></p>
    
        <p><label>使用する器具：
            <select name='equipment'>
                @foreach((array)$training_equipment as $key => $equipment)
                    <option value="{{ $key }}">
                        {{$equipment}}
                    </option>
                @endforeach
            </select>
        </label>
        </p>
    
        <p><label>最大挙上重量(kg)：<input type="number" name="max_lifting_weight" id="max_lifting_weight"></br>
                　最大挙上重量がわからない場合、男性は40、女性は20と入力してください。</label></p>
        
        <button type="submit"><font size="5">作成</font></button>
    </form>    
</body>
</html>