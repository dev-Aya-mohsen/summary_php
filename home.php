<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<select class="form-select" aria-label="Default select example">
  <?php
  $e = 2000;
  while  ($e <=date("Y")) {
       echo"<option>".$e."<br>"."</option>";
       $e++; // $e+=10 
  }
  ?>
</select>
</body>
</html>

<?php
  echo "<hr>";
  //=========================== variables ==================================//
  $first_name = "Aia" ; 
  $last_name = "Mohsen" ;
  $age = 23 ;
  echo "first-name is : " .$first_name ."<br>"."last-name is : " .$last_name ."<br>"." age is : " . $age ;
  echo "<br>" ;
  echo $first_name." ".$last_name." ".$age ;     # another method 
  # echo "<p>". $first_name." ".$last_name." ".$age ."</p>" ;    # another method 
 //=========================== data types ==================================//
 $name = "Aalaa" ;   #string 
 $age = 26 ;  #int 
 $decimal = 34.5;   #float 
 $isMarried = true;  #boolean 
 var_dump($name);
 var_dump($age);
 echo "<br>" ;
 var_dump($decimal);
 echo "<br>" ;
 var_dump($isMarried);
 //=========================== constants  ==================================//
 define('name', 'Welcome to my php code' );  #consist of name constant + value 
 echo name ;
 //=========================== operators ==================================//
$x = 13;
$y = 7;
# arithmetic operators
echo ($x+ $y) ."<br>" ;
echo ($x - $y)."<br>" ;
echo ($x * $y)."<br>" ;
echo ($x / $y)."<br>" ;
$z = 4;
$z+=10;
echo $z."<br>";
//=========================== if conditions ==================================//
$types=1;
if($types==1){
  echo "this is the first type";
}else {
  echo "error";
}
echo"<br>";
$degree = 50;
if( $degree >= 90 ){
echo "excellent ";
}
elseif ($degree >= 75) {
echo "very good";
}
elseif ($degree >= 65) {
echo "good";
}
else{
echo "failed";
}
echo"<br>";
//===========================loops  ==================================//
##do While 
$i= 1;
while ( $i <= 5 ) {
echo $i."<br>" ;
$i++;
}
##do While 
$j= 1;
do {
 echo "$j";
 $j++ ;
} while ($j <= 10);
echo "<br>";
## for loop 
for($k=1; $k<=5; $k++){
  echo $k."<br>";
}
//===========================foreach ==================================//
$eatch=array("aia","aalaa","ahmed","mohamed");
foreach ($eatch as  $value) {
echo $value."<br>";
}
//===========================indexed array ==================================//
$arraay = array("aia","doha","alaa");
echo $arraay[1];
//===========================associative array==================================//
$assoc =array("ahmed"=>31,"alaa"=>27,"aia"=>24);
echo $assoc["ahmed"];
//===========================multidimentional array==================================//
$all = array(
  array("aia","aila"),
  array("alaa","noor"),
  array("ahmed","yassin")
);
echo $all[0][1];
//===========================form login==================================//
$username = $_POST["username"];
$password = $_POST["password"];
echo $username."<br>".$password ;















































?>