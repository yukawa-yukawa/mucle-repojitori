<?php

namespace App\Libraries;

class Common2
{

    public static function  training_set($max_lifting_weight)
    { 
        if(isset($max_lifting_weight)){
            echo "$max_lifting_weight*0.6を15回";
        }else{
            echo "限界が来るまで";
        }
    } 

}
?>