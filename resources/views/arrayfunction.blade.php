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
echo "<br>";

// --------------------------------------------8/6/2023------------------------------------------------------



//multi dimensional array

$a = array(

    array("Anurag","Mukesh","Raja"),
    array("Priya","Sushma","Rani"),
    array("21","22","23")
);
print_r($a[0][1]);
echo "<br>";


// array_change_key_case
$a1 = array("Anurag"=>"21","Mukesh"=>"23","Rani"=>"25");
$result = array_change_key_case($a1,CASE_UPPER);
print_r($result);
echo "<br>";

$a1 = array("AnuRAG"=>"21","MUKESH"=>"23","RANi"=>"25");
$result = array_change_key_case($a1,CASE_LOWER);
print_r($result);
echo "<br>";


// array_count_values
$array1 = array("A","B","A","D");
$result = array_count_values($array1);
print_r($result);
echo "<br>";


// array_combine
$name = array("Anand","Sakshi","Chandani","Ruchika");
$age = array(21,23,24,22);
$result = array_combine($name,$age);
print_r($result);
echo "<br>";


//array_intersect
$x1 = array("a"=>"Apple","b"=>"Bull","c"=>"Cats","d"=>"Dhruv");
$x2 = array("a"=>"Banana","b"=>"Bull","x"=>"Cats","d"=>"Donkey");
$result = array_intersect($x1,$x2);
print_r($result);
echo "<br>";

//array_intersect_key
$x1 = array("a"=>"Apple","b"=>"Bull","c"=>"Cats","d"=>"Dhruv");
$x2 = array("a"=>"Banana","b"=>"Bully","x"=>"Cats","d"=>"Donkey");
$result = array_intersect_key($x1,$x2);
print_r($result);
echo "<br>";

// array_intersect_assoc
$x1 = array("a"=>"Apple","b"=>"Bull","c"=>"Cats","d"=>"Dhruv");
$x2 = array("a"=>"Banana","b"=>"Bull","x"=>"Cats","d"=>"Donkey");
$result = array_intersect_assoc($x1,$x2);
print_r($result);
echo "<br>";


// array_intersect_uassoc
function myfunctions($a,$b)
{
    if($a === $b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

$x1 = array("a"=>"Apple","b"=>"Bull","c"=>"Cats","d"=>"Dhruv");
$x2 = array("a"=>"Banana","b"=>"Bull","c"=>"Cats","d"=>"Donkey");
// $x3 = array("a"=>"Apple");
$result = array_intersect_uassoc($x1,$x2,"myfunctions");
print_r($result);
echo "<br>";

// array_intersect_ukey

function showdata($a,$b)
{
    if($a === $b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}

$x1 = array("a"=>"Apple","b"=>"Bull","c"=>"Cats","d"=>"Dhruv");
$x2 = array("a"=>"Banana","b"=>"Bully","x"=>"Cats","d"=>"Donkey");
// $x3 = array("a"=>"Apple");
$result = array_intersect_ukey($x1,$x2,"showdata");
print_r($result);
echo "<br>";


//array_replace
$n1 = array("Anurag","Mukesh","Arjun");
$n2 = array("Java","React","PHP");
$result = array_replace($n1,$n2);
print_r($result);
echo "<br>"; 


//array_reverse
$rev = array("ABC","MNO","XYZ");
$result = array_reverse($rev);
print_r($result);
echo "<br>";


//array_combine

$n1 = array("Anurag","Mukesh","Arjun");
$n2 = array("Java","React","PHP");
$result = array_combine($n1,$n2);
print_r($result);
echo "<br>";


//array_merge
$n1 = array("Anurag","Mukesh","Arjun");
$n2 = array("Java","React","PHP");
$result = array_merge($n1,$n2);
print_r($result);
echo "<br>";


//array_reverse with preserve parameter
$pre = array("a"=>"Apple","b"=>"Bull","c"=>"Cats","d"=>"Dhruv");
$result = array_reverse($pre,true);
print_r($result);
echo "<br>";


//count
$array1 = array("Ankit","Mukesh","Naresh","Casting","Model");
$result = sizeof($array1);
print_r($result);
echo "<br>";

//sorting of an array in ascending order
$a = array(4,2,7,-2,6,8,10,3);
sort($a);
print_r($a);
echo "<br>";


//sorting of an array in descending order
$a = array(14,22,79,62,26,38,10,36);
rsort($a);
print_r($a);
echo "<br>";


//array_flip
$flip = array("A"=>"Sanika","B"=>"Nikunj","C"=>"Rahul","D"=>"Ajay");           
$result = array_flip($flip);
print_r($result);
echo "<br>";

// array_values()
$m1 = array("c"=>"Rakesh","d"=>"Vinod","a"=>"Lalit","b"=>"Parmod");
$result = array_values($m1);
print_r($result);
echo "<br>";


//array_sum
$sum = array(1,32,3,4,34);
$result = array_sum($sum);
print_r($result);
echo "<br>";

///array_key
$m1 = array("c"=>"Rakesh","d"=>"Vinod","a"=>"Lalit","b"=>"Parmod");
$result = array_keys($m1);
print_r($result);
echo "<br>";

//keys implemented with value parameter
$m1 = array("c"=>"Rakesh","d"=>"Vinod","a"=>"Lalit","b"=>"Parmod");
$result = array_keys($m1,"Rakesh");
print_r($result);
echo "<br>";

//array_map
function mark($x)
{
    if ($x === "Anurag")
    {
    return "PHP Developer";
    }
    else if($x === "Arjun")
    {
        return "Laravel Developer";
    }    
    return $x;
}

$a=array("Anurag","Arjun","Mukesh");
print_r(array_map("mark",$a));
echo "<br>";

// ---------------------------------------------------9/6/2023--------------------------------------------------
//range()
$result = range(3,17,2);
print_r($result);
echo "<br>";


//range() with increment 10
$a = range(10,50,5);
print_r($a);
echo "<br>";


// arsort()
$a = array("a"=>"45","b"=>"73","c"=>"09","d"=>"19");
arsort($a);
print_r($a);
echo "<br>";


//asort()
$a = array("a"=>"45","b"=>"73","c"=>"-9","d"=>"19");
asort($a);
print_r($a);
echo "<br>";


//array_fill()
$result = array_fill(3,4,"Blue");
print_r($result);
echo "<br>";



//array_slice()
$array = array("red","yellow","blue","green");
$result = array_slice($array,1,2);
print_r($result);
echo "<br>";


//array_slice() with preserve=true
$a = array("red","yellow","green","blue");
$result = array_slice($a,1,2,true);
print_r($result);
echo "<br>";

$a1 = array("Red","Yellow","Blue");
$a2 = array("Change Green", "Change Pink");
array_splice($a1,0,2,$a2);
print_r($a1);
echo "<br>";



//shuffle
$m1 = array("Raja","Baja","Khaja","Maaja");
shuffle($m1);
print_r($m1);
echo "<br>";



 //array_map()
function map($data)
{
    if($data ==="Java")
    {
    return "Springboot";
    }
    else if($data === "PHP")
    {
    return "Laravel";
    }
    return "Default";
}
 
$array = array("Java","PHP","Python");
$result = array_map("map",$array);
print_r($result);   
echo "<br>";


//krsort()
$k = array("2"=>"Mukkadar","-3"=>"Ka","5"=>"Sikkdar");
krsort($k);
print_r($k);
echo "<br>";

//ksort()

$k = array("8"=>"Raja","3"=>"Ram","19"=>"MOhan","2"=>"Roy");
ksort($k);
print_r($k);
echo "<br>";


//uasort
function mysort($a,$b)
{
    if($a === $b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}
$a = array("a"=>"Anurag","b"=>"Zebra","x"=>"Venom","y"=>"Bash");
uasort($a,"mysort");
print_r($a);
echo "<br>";    


//uasort
function mysorts($a,$b)
{
    if($a === $b)
    {
        return 0;
    }
    return ($a>$b)?1:-1;
}
$a = array("m"=>"Anuradha","a"=>"Zimba","x"=>"Vulture","y"=>"Hash");
uksort($a,"mysorts");
print_r($a);
echo "<br>";    

//array_multisort()
$a1 = array(45,78,23,89,67);
$a2 = array(89,27,13,17,19);
array_multisort($a1,SORT_DESC,SORT_NUMERIC,$a2,SORT_ASC);
print_r($a1);
echo "<br>";
print_r($a2);
echo "<br>";


//array_search()

$a = array("blue","moon","sun","star","5");
if(array_search("star",$a,true))
{
    echo "Found";
}
else
{
    echo "Not found";
}
echo "<br>";


//array_walk
function walking($value,$key)
{
    echo $key."<br>";
   echo "The key ".$key." has the value ".$value."<br>";
}
$walk = array("a"=>"Hum","x"=>"Prem","v"=>"Dijale","m"=>"Naseeb");
array_walk($walk,"walking");
echo"<br>";


//current 
$a = array("raster","linear","regression","momentum");
echo current($a)."<br>";
echo next($a)."<br>";
echo prev($a)."<br>";
echo end($a);
echo"<br>";

$people = array("Pushpa", "Jhon", "Glora", "Cluster");

echo current($people)."<br>";
echo next($people)."<br>";
echo current($people)."<br>";
echo reset($people);
echo"<br>";


//each
$e = array("c"=>"Rakesh","d"=>"Vinod","a"=>"Lalit","b"=>"Parmod");
print_r(each($e));
echo"<br>";


//compact()
$name = "Anurag";
$lname = "Prajapati";
$age = "21";

$result = compact("name","lname","age");
print_r($result);
?>

