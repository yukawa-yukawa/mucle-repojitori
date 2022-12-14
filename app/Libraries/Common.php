<?php

namespace App\Libraries;

class Common
{

    public static function  training_set($muscle_id,$max_lifting_weight)
    { 
        $x1 = $max_lifting_weight*0.1;
        $x2 = $max_lifting_weight*0.2;
        $x3 = $max_lifting_weight*0.3;
        $x4 = $max_lifting_weight*0.4;
        $x5 = $max_lifting_weight*0.5;
        $x6 = $max_lifting_weight*0.6;
        $x65 = $max_lifting_weight*0.65;
        $x7 = $max_lifting_weight*0.7;
        $x75 = $max_lifting_weight*0.75;
        $x8 = $max_lifting_weight*0.8;
        $x85 = $max_lifting_weight*0.85;
        $x9 = $max_lifting_weight*0.9;
        
        if($muscle_id === 1){
            echo   "・$x6 kgを15回<br>
                    1分半休憩<br>
                    ・$x7 kgを8回<br>
                    3分休憩<br>
                    ・$x8 kgを8回<br>
                    5分休憩<br>
                    ・$x85 kgを6回<br>
                    5分休憩<br>
                    ・$x9 kgを4回
                  ";
                  
        }elseif($muscle_id === 2){
            echo    "・立ちコロ10回(できない場合は膝コロ15回)<br>
                    1分半休憩<br>
                    ・膝コロ10回<br>
                    1分休憩<br>
                    ・膝コロ10回
                   ";
                   
        }elseif($muscle_id === 3 or $muscle_id === 20 or $muscle_id === 26){
            echo    "・左右15回<br>
                    ・左右15回<br>
                    1分半休憩<br>
                    ・左右12回<br>
                    1分休憩<br>
                    ・左右12回<br>
                    ・左右8回
                    "; 
                    
        }elseif($muscle_id === 4){
            echo    "・$x5 kgを12回<br>
                    1分半休憩<br>
                    ・$x6 kgを10回<br>
                    3分休憩<br>
                    ・$x7 kgを8回<br>
                    3分休憩<br>
                    ・$x8 kgを6回<br>
                    5分休憩<br>
                    ・$x85 kgを4回
                    ";
        
        }elseif($muscle_id === 5 or $muscle_id === 28){
            echo    "・リバースフライ1分<br>
                    ・フロントレイズ左右15回ずつ<br>
                    1分休憩<br>
                    ・ショルダープレス左右15回ずつ<br>
                    ・サイドレイズ1分<br>
                    1分休憩<br>
                    ・スライサーズ1分
                    ";
                    
        }elseif($muscle_id === 6 or $muscle_id === 22 or $muscle_id === 29){
            echo    "・8回1セット<br>
                    1分休憩<br>
                    ・10回1セット<br>
                    1分半休憩<br>
                    ・12回1セット<br>
                    2分休憩<br>
                    ・15回1セット
                    ";
        
        }elseif($muscle_id === 7 or $muscle_id === 9 or $muscle_id === 23 or $muscle_id === 30 or $muscle_id === 32){
            echo    "・左右15回1セット<br>
                    1分休憩<br>
                    ・左右12回1セット<br>
                    1分半休憩<br>
                    ・左右10回1セット<br>
                    30秒休憩<br>
                    ・左右10回1セット
                    ";
                    
        }elseif($muscle_id === 8 or $muscle_id === 31){
            echo    "・15回1セット<br>
                    1分半休憩<br>
                    ・12回1セット<br>
                    1分休憩<br>
                    ・10回1セット
                    ";
        
        }elseif($muscle_id === 10 or $muscle_id === 13 or $muscle_id === 14 or $muscle_id === 15 or $muscle_id === 17 or $muscle_id === 18 or $muscle_id === 25 or $muscle_id === 33 or $muscle_id === 36 or $muscle_id === 37 or $muscle_id === 38 or $muscle_id === 39 or $muscle_id === 40){
            echo    "・20回1セット<br>
                    1分休憩<br>
                    ・15回1セット<br>
                    30秒休憩<br>
                    ・15回1セット
                    ";
        
        }elseif($muscle_id === 11 or $muscle_id === 34){
            echo    "・ナロープッシュアップ10回<br>
                    1分休憩<br>
                    ・リバースプッシュアップ20回<br>
                    1分休憩<br>
                    ・ナロープッシュアップ8回<br>
                    1分休憩<br>
                    ・リバースプッシュアップ20回<br>
                    1分休憩<br>
                    ・ナロープッシュアップ5回<br>
                    ・リバースプッシュアップ12回
                    ";
        
        }elseif($muscle_id === 12 or $muscle_id === 35){
            echo    "・15回1セット<br>
                    30秒休憩<br>
                    ・10回1セット<br>
                    1分休憩<br>
                    ・8回1セット
                    ";
        
        }elseif($muscle_id === 16){
            echo    "・限界回数を3セット<br>
                    毎回2分休憩
                    ";
        
        }elseif($muscle_id === 19){
            echo    "・$x6 kgを15回<br>
                    1分半休憩<br>
                    ・$x7 kgを8回<br>
                    3分休憩<br>
                    ・$x8 kgを5回<br>
                    5分休憩<br>
                    ・$x9 kgを4回<br>
                    5分休憩<br>
                    ・$x9 kgを4回
                    5分休憩<br>
                    ・$x9 kgを4回
                    ";
        
        }elseif($muscle_id === 21){
            echo    "・$x5 kgを16回<br>
                    1分半休憩<br>
                    ・$x6 kgを10回<br>
                    3分休憩<br>
                    ・$x7 kgを5回<br>
                    3分休憩<br>
                    ・$x85 kgを4回<br>
                    5分休憩<br>
                    ・$x85 kgを4回
                    5分休憩<br>
                    ・$x85 kgを4回
                    ";
        
        }elseif($muscle_id === 24){
            echo    "・$x6 kgを15回<br>
                    1分半休憩<br>
                    ・$x6 kgを20回<br>
                    3分休憩<br>
                    ・$x5 kgを15回<br>
                    5分休憩<br>
                    ・$x5 kgを15回<br>
                    5分休憩<br>
                    ・$x4 kgを20回
                    ";
        
        }elseif($muscle_id === 27){
            echo    "・シャフトのみで20回<br>
                    1分半休憩<br>
                    ・$x2 kgを15回<br>
                    3分休憩<br>
                    ・$x4 kgを15回<br>
                    3分休憩<br>
                    ・$x6 kgを20回<br>
                    5分休憩<br>
                    ・$x6 kgを20回
                    ";
                    
        //全男完了            
        
        }elseif($muscle_id === 41){
            echo   "・$x4 kgを15回<br>
                    1分半休憩<br>
                    ・$x5 kgを8回<br>
                    3分休憩<br>
                    ・$x6 kgを8回<br>
                    5分休憩<br>
                    ・$x65 kgを6回<br>
                    5分休憩<br>
                    ・$x7 kgを4回
                  ";
        }elseif($muscle_id === 42){
            echo    "・立ちコロ6回(できない場合は膝コロ10回)<br>
                    1分半休憩<br>
                    ・膝コロ6回<br>
                    1分休憩<br>
                    ・膝コロ6回
                   ";
        }elseif($muscle_id === 43 or $muscle_id === 60 or $muscle_id === 66){
            echo    "・左右15回<br>
                    ・左右15回<br>
                    1分半休憩<br>
                    ・左右12回<br>
                    1分休憩<br>
                    ・左右12回<br>
                    ・左右8回
                    "; 
        }elseif($muscle_id === 44){
            echo    "・$x3 kgを12回<br>
                    1分半休憩<br>
                    ・$x4 kgを10回<br>
                    3分休憩<br>
                    ・$x5 kgを8回<br>
                    3分休憩<br>
                    ・$x6 kgを6回<br>
                    5分休憩<br>
                    ・$x65 kgを4回
                    ";
        
        }elseif($muscle_id === 45 or $muscle_id === 68){
            echo    "・リバースフライ1分<br>
                    ・フロントレイズ左右15回ずつ<br>
                    1分休憩<br>
                    ・ショルダープレス左右15回ずつ<br>
                    ・サイドレイズ1分<br>
                    1分休憩<br>
                    ・スライサーズ1分
                    ";
                    
        }elseif($muscle_id === 46 or $muscle_id === 62 or $muscle_id === 69){
            echo    "・8回1セット<br>
                    1分休憩<br>
                    ・10回1セット<br>
                    1分半休憩<br>
                    ・12回1セット<br>
                    2分休憩<br>
                    ・15回1セット
                    ";
        
        }elseif($muscle_id === 47 or $muscle_id === 49 or $muscle_id === 63 or $muscle_id === 70 or $muscle_id === 72){
            echo    "・左右15回1セット<br>
                    1分休憩<br>
                    ・左右12回1セット<br>
                    1分半休憩<br>
                    ・左右10回1セット<br>
                    30秒休憩<br>
                    ・左右10回1セット
                    ";
                    
        }elseif($muscle_id === 48 or $muscle_id === 71){
            echo    "・10回1セット<br>
                    1分半休憩<br>
                   ・8回1セット<br>
                    1分休憩<br>
                    ・6回1セット
                    ";
        
        }elseif($muscle_id === 50 or $muscle_id === 53 or$muscle_id ===  54 or $muscle_id === 55 or $muscle_id === 57 or $muscle_id === 58 or $muscle_id === 65 or $muscle_id === 73 or $muscle_id === 76 or $muscle_id === 77 or $muscle_id === 78 or $muscle_id === 79 or $muscle_id === 80){
            echo    "・15回1セット<br>
                    1分休憩<br>
                    ・10回1セット<br>
                    30秒休憩<br>
                    ・8回1セット
                    ";
        
        }elseif($muscle_id === 51 or $muscle_id === 74){
            echo    "・ナロープッシュアップ5回<br>
                    1分休憩<br>
                    ・リバースプッシュアップ15回<br>
                    1分休憩<br>
                    ・ナロープッシュアップ4回<br>
                    1分休憩<br>
                    ・リバースプッシュアップ12回<br>
                    1分休憩<br>
                    ・ナロープッシュアップ3回<br>
                    ・リバースプッシュアップ8回
                    ";
        
        }elseif($muscle_id === 52 or $muscle_id === 75){
            echo    "・12回1セット<br>
                    30秒休憩<br>
                    ・8回1セット<br>
                    1分休憩<br>
                    ・6回1セット
                    ";
        
        }elseif($muscle_id === 56){
            echo    "・限界回数を3セット<br>
                    毎回2分休憩
                    ";
        
        }elseif($muscle_id === 59){
            echo    "・$x4 kgを15回<br>
                    1分半休憩<br>
                    ・$x5 kgを8回<br>
                    3分休憩<br>
                    ・$x6 kgを5回<br>
                    5分休憩<br>
                    ・$x7 kgを4回<br>
                    5分休憩<br>
                    ・$x7 kgを4回
                    5分休憩<br>
                    ・$x7 kgを4回
                    ";
        
        }elseif($muscle_id === 71){
            echo    "・$x3 kgを16回<br>
                    1分半休憩<br>
                    ・$x4 kgを10回<br>
                    3分休憩<br>
                    ・$x5 kgを5回<br>
                    3分休憩<br>
                    ・$x65 kgを4回<br>
                    5分休憩<br>
                    ・$x65 kgを4回
                    5分休憩<br>
                    ・$x65 kgを4回
                    ";
        
        }elseif($muscle_id === 74){
            echo    "・$x4 kgを15回<br>
                    1分半休憩<br>
                    ・$x4 kgを20回<br>
                    3分休憩<br>
                    ・$x3 kgを15回<br>
                    5分休憩<br>
                    ・$x3 kgを15回<br>
                    5分休憩<br>
                    ・$x2 kgを20回
                    ";
        
        }elseif($muscle_id === 67){
            echo    "・シャフトのみで15回<br>
                    1分半休憩<br>
                    ・$x1 kgを15回<br>
                    3分休憩<br>
                    ・$x2 kgを15回<br>
                    3分休憩<br>
                    ・$x4 kgを20回<br>
                    5分休憩<br>
                    ・$x4 kgを20回
                    ";            
                    
                    
        }else{
            echo "限界が来るまで";
        }   
    } 

}
?>