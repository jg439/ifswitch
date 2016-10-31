<?php
//Isset, empty, null, switch, and if - homework 5
//Read the articles below and create at least 4 if statements that use isset,
//empty and null. Once you have mastered if statements, please create 4 examples
//of switch-case using that use isset, empty and null. You need to create a website on
//the AFS to show what you did and push it to GitHub. Remember that you should submit links on the Moodle.
$price = 10;
$quantity = 200;
$revenue = $price*$quantity;
if (empty($revenue)==true) {
    echo 'Please fill out the variables';
    echo "<br>";
}
else {
   echo 'Thanks for filling the variables';
   echo "<br>";
}

if(isset($revenue) == true){
  echo 'Congratulations! Your variables are set and not null';
  echo "<br>";

}

else{
  echo 'Please set your variables';
  echo "<br>";
}
$newPrice;
if(is_null($newPrice)==true){
  echo 'Create a non NULL variable!';
    echo "<br>";
}
else{
  echo 'Good job, your variable value is  ' .$newPrice;
    echo "<br>";
}

//Using switch with isset, is_null, and empty

switch($revenue){
case (empty($revenue)==false) :
  echo 'My variable is $$$';
    echo "<br>";
  break;
case (empty($revenue)==true):
  echo 'My variable is not set up';
  echo "<br>";
  break;
}
switch($newPrice){
case (is_null($revenue)==true):
  echo 'My variable is not set up';
  echo "<br>";
  break;
case (is_null($revenue)==false):
  echo 'My variable is not set up';
  echo "<br>";
  break;
}
switch($revenue){
case (isset($revenue) == true):
  echo 'Everything done!! Your variable is checked';
  echo "<br>";
  break;
case (isset($revenue) == false):
  echo 'Please set up your variable';
  echo "<br>";
  break;
}

?>
