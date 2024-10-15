<?php
//substraction function

 function subs($a,$b)
 {
 echo "substraction of $a and $b = $a-$b";
 }
 subs(15,2);
 subs(15,4);
 subs(20,3);
//multiplication function
 function mult($a,$b)
 {
 echo "multiplication of $a and $b = $a*$b";
 }
 subs(15,2);
 subs(15,4);
 subs(20,3);
//devision function
 function div($a,$b)
 {
 echo "devision of $a and $b = $a/$b";
 }
 subs(16,2);
 subs(18,4);
 subs(20,4);
//add function
 function sum($a,$b)
 {
 echo "Addition of $a and $b = $a+$b";
 }
 subs(16,2);
 subs(18,4);
 subs(20,4);

//str funtion

//strlen function
$a = "hey this is siri";

echo $strlen($a);//output 15

//strlower lower
$a = "Hey this is Siri";
echo $strlower($a);//output hey this is siri

//strupper function
$a = "hey this is siri";
echo $strupper($a);//output HEY THIS IS SIRI

// Which word is no. Starting from
$a = "hey this is siri";
echo $strpos($a, "this");//output 4

//substr function
$a = "hey this is siri";
echo $substr($a, 4, 4);//output this

//replace function
$a = "hey this is siri";
echo $str_replace("siri", "Aman", $a );//output hey this is Aman


//Array funtion

//array
$a = array(1,2,3,4,5,6);
array($a);//output [1,2,3,4,5,6]
//arraymerge
$a = array("a", "b", "c");
$b = array("d", "e", "f");
arraymerge($a, $b);//output ["a", "b", "c"","d", "e", "f"]

//array push
$a = array("a", "b", "c");
arraypush($a, "e", "f");// ["a", "b", "c"", "e", "f"]

//arraypop
$a = array("a", "b", "c");
arraypop($a);// output ["a", "b"]

//array_value
$a = array(1 => "a", 2=>"b", 3=>"c");
$c = array_value($a);// output ["a", "b", "c"]

//array_KEY
$a = array(1 => "a", 2=>"b", 3=>"c");
$b = array_key($a);// output [1, 2, 3]

//array_filter
$a = array("aman", "naman", "chaman", "daman");
$b = array_filter($a, function($val){
    return $val=="aman";//output ["aman", "naman", "chaman", "daman"]
})

//array_map
$a = array(2,4,6,8,9);
$b = array_map(function($val){
    return $val*$val}, $a)
    //output [4,25,36,64,81]

    //Date/time function
echo "today date is = " date("y-m-d");
echo "today date is = " date("l");
?>