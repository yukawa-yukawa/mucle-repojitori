<?php

namespace App\Libraries;

class Common
{

    public function  training_set($muscle_id,$max_lifting_weight)
    { 
        if($muscle_id === 1){
            return "$max_lifting_weight*0.6を15回";
        }elseif($muscle_id === 2){
            return "膝コロ10回2セット、立ちコロ10回1セット";
        }else{
            return "限界が来るまで";
        }   
    } 

}
?>