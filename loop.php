<?php
//using for loop
$a = 20;
for($b=0; $b<=$a; $b++){
    echo $b;
}
//using while loop
while($a<=30){
    echo $a;
    $a++;
}
//do while loop
$a=2;
do{
    $a += 2;
    echo $a;
}while($a<=20);
//foreach loop
$numbers = array(1,2,3,4,5)

foreach($numbers as $a){
    echo $a;
}


<?