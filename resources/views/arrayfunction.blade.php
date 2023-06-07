<h1>Implementation of PHP Array Functions </h1>

<?php

$name="Arjun";
if($name=="Arjun")
{
    echo "Laravel Developer";
}
elseif($name=="Anurag")
{
    echo "Fresher";
}
else
{
    echo "Default";
}
echo "<br>";


//for loop
for($x=1;$x<=3;$x++)
{
    echo "For Looping is running ".$x."<br>";
}
 
//foreach
$arrays = array("ABC","XYZ","MNO");
foreach($arrays as $item)
{
    echo $item."<br>";
}


//while loop
$x=1;
while($x<10)
{
    echo "While loop is running ".$x."<br>";
    $x++;
}
echo "<br>";


//do -while loop
$x=1;
do{
    echo "HIi <br>";
    $x++;
}
while($x<=10);
echo "<br>";


//array_chunk
$data = array("Anurag"=>"21","Mukesh"=>"21","Arjun"=>"23");
print_r(array_chunk($data,2,));
echo"<br>";


//array_diff
$array1 = array("a"=>"red","1"=>"yellow","b"=>"green");
$array2 = array("3"=>"black","a"=>"red","4"=>"purple");
$result = array_diff($array2,$array1);
print_r($result);
echo "<br>";

//array_diff_key
$array1 = array("a"=>"red","1"=>"yellow","b"=>"green");
$array2 = array("b"=>"black","a"=>"red","4"=>"purple");
$result = array_diff_key($array2,$array1);
print_r($result);
echo "<br>";

//array_diff_assoc
$array1 = array("a"=>"red","1"=>"yellow","b"=>"green");
$array2 = array("3"=>"black","a"=>"red","4"=>"purple");
$array3 = array("1"=>"yellow","a"=>"red","4"=>"purple");
$result = array_diff_assoc($array1,$array2,$array3);
print_r($result);
echo"<br>";

//array_pad
$data = array("red","green");
$result = array_pad($data,6,"blue");
print_r($result);
echo "<br>";

//array_pop
$data = array("red","green","blue");
array_pop($data);
print_r($data);
echo "<br>";

//array_push
$data = array("red","green","blue");
array_push($data,"yellow","green");
print_r($data);
echo"<br>";

//array_product
$data = array(2,4,5,8);
$result = array_product($data);
print_r($result);
echo "<br>";

//array_diff_uassoc
function myfunction($a,$b)
{
        if($a===$b)
        {
            return 0;
        }
        return ($a>$b)?1:-1;
}

$value1 = array("x"=>"Apple","b"=>"Mango","x"=>"Orange","d"=>"Banana");
$value2 = array("b"=>"Mango","x"=>"Apple","c"=>"Orange","d"=>"Banana");
$result = array_diff_uassoc($value1,$value2,"myfunction");
print_r($result);










?>

