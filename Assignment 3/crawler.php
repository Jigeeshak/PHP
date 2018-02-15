
<?php

echo "i am in php storm </br>";
$content ="";
$relativepath = "http://php.net/manual/en/";
if(!$fp = fopen($relativepath."ref.array.php" ,"r" ))
{
    return false;
}
while(!feof($fp)) {
    global $content;
    $content .= fgets($fp, 1024);
}

//store the html page as content.txt
file_put_contents("content.txt", $content);

fclose($fp);

preg_match_all("((?:<li>.*?<\/li>){30})", $content, $actuals, PREG_SET_ORDER);
//preg_match_all('/ <li>(.+)</li> /', $content, $actuals, PREG_SET_ORDER);

$str1 = $actuals[0][0];
$arr1 = explode('</li><li>',$str1,30);
$arr1[0] = substr($arr1[0], 4);
$arr1[29] = substr($arr1[29], 0, -5);
$ans = "<table border = \"1\" ";
foreach($arr1 as $key => $value)
{

    preg_match('/<a href="(.+)">/', $value, $match);
    //$path = $match[1]; //this will have the path- one of the columns in table
    $path = "<a href= ".$relativepath.$match[1]."> link </a>";

    preg_match('/>(.+)</', $value, $match2);
    $func = $match2[1];

    preg_match('/—(.+)/', $value, $match3);
    $desc = $match3[1];

    $newvalue = "<tr> <td>$func</td> <td>$desc</td><td>$path</td> </tr>" ;
    global $ans ;

    $ans .=  $newvalue ;

}

$ans = $ans . "</table" ;

echo $ans;

?>
