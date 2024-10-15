<?php 
int $a = 2;
int $b=4;
int $c;
//arithmatic operator
$c = $a + $b;//addition
echo $c '\n';
c = $a - $b;//substraction
echo $c '\n';
c = $a / $b;//devide
echo $c '\n';
c = $a % $b;//modulas
echo $c '\n';
c = $a * $b;//multiply
echo $c '\n';

//assignment 
$b += $a;
echo $b '\n';
$a -= $b;
echo $a '\n';
$a /= $b;
echo $a'\n';
$a **= $b;
echo $a '\n';
$b %= $b;
echo $b'\n';

//logical
if(($a>$b)and($a==$b)){ //and 
    echo $a;
}
if(($a>$b)or($a==$b)){//or
    echo $a;
}
if(($a!=$b)){//not
    echo $a;
}



?>