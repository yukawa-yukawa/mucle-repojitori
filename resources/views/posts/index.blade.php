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
            <select name=”item”>
                <option value=”item1”>男</option>
                <option value=”item2”>女</option>
            </select>
        </label></p>
        
        <p><label>トレーニングの目的：
             <select name=”item”>
                <option value=”item1”>筋肥大</option>
                <option value=”item2”>最大重量up</option>
                <option value=”item3”>ダイエット</option>
             </select>
        </label></p>
    
        <p><label>主に鍛えたい部位：
             <select name=”item”>
                <option value=”item1”>腕</option>
                <option value=”item1”>腹筋</option>
                <option value=”item2”>足</option>
                <option value=”item3”>胸</option>
                <option value=”item1”>肩</option>
                <option value=”item1”>背中</option>
             </select>
        </label></p>
    
        <p>持っている筋トレ器具<br>
            <input type="checkbox" name="q1" value="その1"> ダンベル
            <input type="checkbox" name="q1" value="その2"> トレーニングベンチ
            <input type="checkbox" name="q1" value="その3"> ベンチプレス(シャフト・プレート)
            <input type="checkbox" name="q1" value="その4"> チューブ
            <input type="checkbox" name="q1" value="その5"> 腹筋ローラー
        </p>
    
        <p><label>最大挙上重量(kg)：<input type="text" id="nameText"></label></p>

        [<a href='/posts/menu'>作成</a>]
    </form>    
</body>
</html>