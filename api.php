<?php include("conn.php"); ?>

<?php
// Post URL: http://codypaste.com/create-rest-api-in-php-using-curl-json/

$apikey=$_GET['apikey'];
$call=$_GET['call'];

if($apikey=="75453Edrt09" && $call="contact") // Validate APIkey with given APIkey which client or user will pass in parameter. e.g. 'contact.php'
{
$val=mysql_query("SELECT * FROM contact");


$buffer = array();
while($row=mysql_fetch_assoc($val))
{
$rows["name"] = "$row[name]";
$rows["phone"] = "$row[phone]";
$rows["email"] = "$row[email]";

$buffer[] = $rows;
}// while close here

$x=json_encode($buffer);

echo"$x";

} // if api key matched close here






//================================================================================









?>