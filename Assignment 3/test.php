
<?php 

$content ="";
if(!$fp = fopen("http://php.net/manual/en/ref.array.php" ,"r" )) 
{ 
return false; 
} //our fopen is right, so let’s go $content = ""; 
while(!feof($fp)) { 
//while it is not the last line, we will add the current line to our $content 
global $content;
$content .= fgets($fp, 1024); 
} 

//store the html page

fclose($fp); //we are done here, don’t need the main source anymore

//echo "Content follows.</br>";
//echo "Content below.</br>";
//echo $content ;
//echo "Content ends</br>";


//{
//preg_match_all()
//

//$pattern = '~<li>(.*?)</li>~s';
//preg_match_all($pattern, $content, $out);

preg_match_all("((?:<li>.*?<\/li>){30})", $content, $prices, PREG_SET_ORDER);


//str_replace("li" , "td", $out[0]);

//print_r($prices[0][0]); // this array contains all the required values

$str1 = $prices[0][0];



$arr1 = explode('</li><li>',$str1,30);

$str2 = implode("", $arr1);

str_replace('li', 'tr' , $str2);
//str_replace('li', ' ' , $str2);

/*foreach($arr1 as $key => $value)
{
 $subarr2 = explode('—',$value,2);
 $arr1[$key] = $subarr2;
}
*/
echo $str2;

//cpnvert the array into string
//$str1 = implode("</td><td>", $out[0]);
//$str2 = '<tr> <td>'.$str1.'</td></tr>' ;
//echo "$str2";



//}


//
 ?>
