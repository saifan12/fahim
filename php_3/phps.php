<?php
$search_value = 4;
    $list_of_values= array(2,3,4,1,5);
    sort($list_of_values);
    $l=0;
    $r = count($list_of_values)-1;
    $result = binary_search($search_value,$list_of_values,$l,$r);

    if($result == -1){
        echo "Not Found";
    }
    else{
        echo $result;
    }
    function binary_search($search_value,$arr,$l,$r){
        while($l<=$r){
            $mid = floor(($l+$r)/2);
            if($arr[$mid]==$search_value){
                return $mid;
            }
            elseif($search_value>$arr[$mid]){
                $l = $mid + 1;
            }
            else{
                $r = $mid-1;
            }
        }
        return -1;
    }
?>