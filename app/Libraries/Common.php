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
        $x7 = $max_lifting_weight*0.7;
        $x8 = $max_lifting_weight*0.8;
        $x9 = $max_lifting_weight*0.9;
        
        if($muscle_id === 1){
            echo "$x7 kgを15回
                  $x8を15回";
        }elseif($muscle_id === 2){
            echo "膝コロ10回2セット、立ちコロ10回1セット";
        }else{
            echo "限界が来るまで";
        }   
    } 

}
?>