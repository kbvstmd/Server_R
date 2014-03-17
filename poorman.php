<?php
// poorman.php
//if($nocache<1)
//{ $N = 5; $cols='lightblue';}

$N = $_POST['N'];
echo "<br>";
echo "<form action='poorman.php' method='post'>";
echo "Number of random values: <input type='text' name='N' value='$N' />";
echo "<br>";
echo "Choose a Color: <input type='radio' name='colr' value='lightblue' checked>Blue";
echo "<input type='radio' name='colr' value='green'>Green";
echo "<input type='radio' name='colr' value='red'>Red";
echo "<br>";
echo "<input type='submit' value = 'Graph this now!'/>";
echo "</form>";

//$nocache = rand();
//$num=5;
//$cols="lightblue";
//exec("Rscript my_rscript.R '$num' '$cols' '$nocache'");
//echo "<img src='$chart'>";

if(isset($_POST['N']))
{
 $nocache = rand(); 
 $N = $_POST['N'];
 $cols = $_POST['colr'];
  //$color =  $_POST['color']);
  // echo "$N";
  // echo "$color";
  // print_r($color);
  $chart = "temp$nocache.png";
  echo "$chart";
  exec("Rscript my_rscript.R '$N' '$cols' '$nocache'");
  echo "<img src='$chart'>";
}


 // $chart = "temp$nocache.png";
  //echo "$chart";
  // execute R script from shell
  // this will save a plot at temp.png to the filesystem
  //exec("Rscript my_rscript.R '$N' '$cols' '$nocache'");
  // return image tag
  //echo "<img src='$chart'>";

?>
