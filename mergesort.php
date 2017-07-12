 <!DOCTYPE html>
<html>
<head>
    <title> Merge Sort </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$n=$_GET['n'];
$my_array = array();
for ($i=0; $i<$n; $i++){
    $my_array[$i]=rand(1,100);
}
 
function mergesort($my_array)
{
    if(count($my_array) == 1 ) return $my_array;
 
    $mid = count($my_array) / 2;
    $left = array_slice($my_array, 0, $mid);
    $right = array_slice($my_array, $mid);
 
    $left = mergesort($left);
    $right = mergesort($right);
     
    return merge($left, $right);
}
 
function merge($left, $right)
{
    $result=array();
    $leftIndex=0;
    $rightIndex=0;
 
    while($leftIndex<count($left) && $rightIndex<count($right))
    {
        if($left[$leftIndex]>$right[$rightIndex])
        {
 
            $result[]=$right[$rightIndex];
            $rightIndex++;
        }
        else
        {
            $result[]=$left[$leftIndex];
            $leftIndex++;
        }
    }
    while($leftIndex<count($left))
    {
        $result[]=$left[$leftIndex];
        $leftIndex++;
    }
    while($rightIndex<count($right))
    {
        $result[]=$right[$rightIndex];
        $rightIndex++;
    }
    return $result;

}


echo implode(' , ',$my_array)."<br>";
$my_array=mergesort($my_array);
echo implode(' , ',$my_array);



?>


<h1>
    Perhitungan Selesai
</h1>

<div id="back">
    <a href="home.php">Kembali</a>
</div>


</body>
</html> 
