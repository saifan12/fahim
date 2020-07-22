<?php
    $search_value =1 ;
    $list_of_values  = array(1,2,3,4,5);
    $length = count($list_of_values);
    $result = linear_search($search_value,$list_of_values,$length);

    if($result==-1){
        echo "not found";
    }
    else{
        echo "the position of" .$search_value."=".$result;
    }


    function linear_search($s,$arr,$l){
        for($i=0;$i<$l;$i++){
            if($s==$arr[$i]){
                return $i;
            }
        } 
        return -1;
    }
