
<html>
    <body bgcolor="aqua">

<?php

function isarray($x)
{
   return is_array($x);
}


function inarray($x)
{
   return in_array(2,$x);
}


function arrayunique($x)
{
   return arrayunique($x);
}

function ArraySearch($x)
{
   return array_search(3,$x);
}


function arrayReverse($x)
{
   return array_reverse($x);
}

function arraymap($x)
{
   return $x*$x;
}

function arraydiff($x,$y)
{
   return array_diff($x,$y);
}

function Countarray($x)
{
   return count($x);
}

function maxarray($x)
{
   return max($x);
}

function minarray($x)
{
   return min($x);
}

function arrrand($x)
{
   return array_rand($x);
}

function arrcounting($x)
{
   return array_count_values($x);
}

function sorting($x)
{
   return sort($x);
}

function asorting($x)
{
   return asort($x);
}

function arsorting($x)
{
   return arsort($x);
}

function rsorting($x)
{
   return rsort($x);
}

function imploding($x,$y)
{
   return implode($x,$y);
}

function exploding($x,$y)
{
   return explode($x,$y);
}

function arrkeyexist($x,$y)
{
   return array_key_exists($x,$y);
}
 
function arrkeys($x)
{
   return array_keys($x);
}

function arrvalues($x)
{
   return array_values($x);
}



$a=array(1,2,3,4,5);
echo (isarray($a));


//echo (inarray($a));


//echo (inarray($a));


//echo (ArraySearch($a));


 //arrayReverse($a);
 //print_r($a)

 //print_r( array_map("arraymap",$a));

//$b=array(1,2,3,4,5,6,7);
 //print_r(arraydiff($b,$a));

//echo Countarray($a);

//echo maxarray($a);

//echo minarray($a);

//echo arrrand($a);

//print_r(arrcounting($a));

//print_r(sorting($a));

//print_r(asorting($a));

//$c=array("a"=>"1","b"=>"2","c"=>"3");

//print_r(arsorting($c));

//print_r(rsorting($a));

//echo imploding(" ",$a);

//$s="hi,hello,welcome";

//print_r( exploding(" ",$s));


//$arr=array("a"=>"1","b"=>"2","c"=>"3");

//echo arrkeyexist("a",$arr);

//print_r(arrkeys($arr));

//print_r(arrvalues($arr));

$a=array(1,2,3,4,5);

//array_push($a,6);
//print_r($a);

//array_pop($a);
//print_r($a);

//array_unshift($a,0);
//print_r($a);

//array_shift($a);
//print_r($a);

//array_splice($a,0,2);
//print_r($a);

//$a=array(1,2,3);
//$b=array(4,5,6);

//print_r(array_merge($a,$b));


?>

   </body>
</html>