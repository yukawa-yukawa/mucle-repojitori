<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>筋トレメニュー作成機</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
    <p>筋トレメニュー作成機</p>
    <form action="/posts" method="POST">
        @csrf

        <p><label>身長(cm)：<input type="text" id="nameText"></label></p>

        <p><label>体重(kg)：<input type="text" id="nameText"></label></p>
    
        <p><label>性別：
            <select name=”sex”>
                @foreach((array)$training_sex as $key => $sex)
                    <option value="{{ $key }}"
                    </option>
                @endforeach
            </select>
        </label></p>
        
        <p><label>トレーニングの目的：
            <select name=”objective”>
                @foreach((array)$training_objective as $key => $objective)
                    <option value="{{ $key }}"
                    </option>
                @endforeach
            </select>
        </label></p>
    
        <p><label>主に鍛えたい部位：
            <select name=”part”>
                @foreach((array)$training_part as $key => $part)
                    <option value="{{ $key }}"
                    </option>
                @endforeach
            </select>
        </label></p>
    
        <p><label>使用する器具：
            <select name=”equipment”>
                @foreach((array)$training_equipment as $key => $equipment)
                    <option value="{{ $key }}"
                    </option>
                @endforeach
            </select>
        </label>
        
        </p>
    
        <p><label>最大挙上重量(kg)：<input type="text" id="nameText"></label></p>

        [<a href='/posts/menu'>作成</a>]
    </form>    
</body>
</html>