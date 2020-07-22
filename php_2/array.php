<?php
/*
 Indexed Array 
 */
/*  
$customer_name = array("SALMAN", "FERDOUS", "TANJINA", "NUR NABI", "RAFEED TALUKDAR");

// for ($i = 0; $i < count($customer_name); $i++) {
//     echo $customer_name[$i] . "<br>";
// }
$i = 0;
while ($i < count($customer_name)) {
    echo $customer_name[$i] . "<br>";
    $i++;
}
 */
/*
Associative Arrays  
 */
 $price = array("Shirt"=>"100","Panjabi"=>"200","tuoi"=>"300" );
 echo $price ['Shirt']."<br>";

 foreach($price as $p=>$value){
     echo $p.':'. $value ."<br>";
     echo $value."<br>";
 }