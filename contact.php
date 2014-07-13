<?php
// Post URL: http://codypaste.com/create-rest-api-in-php-using-curl-json/

//check if you have curl loaded
if(!function_exists("curl_init")) die("cURL extension is not installed");


$apikey="75453Edrt09";
$call="contact";

$baseurl = 'http://codypaste.com/demo/php/api/api.php'; //change with your api.php URL
$url=$baseurl.'?apikey='.$apikey.'&call='.$call;// you can send Miltiple Prameter. e.g : "$url=$baseurl.'?apikey='.$apikey.'&repo='.$report_type;"

$ch=curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$r=curl_exec($ch);
curl_close($ch);

$arr = json_decode($r,true);
?>




<table width="100%" border="0" align="center" cellpadding="4" cellspacing="1">
                <tr>
                  <td height="25" colspan="8" align="left" valign="middle" bgcolor="#0066CC"><span class="style23">Contact Details From Cross Domain API</span></td>
                </tr>
                <tr>
                  <td width="5%" align="center" valign="middle" bgcolor="#EBEBEB">No.</td>
                  <td width="22%" align="center" valign="middle" bgcolor="#EBEBEB">Name</td>
                  <td width="11%" align="center" valign="middle" bgcolor="#EBEBEB">Email</td>
                  <td width="13%" align="center" valign="middle" bgcolor="#EBEBEB">Phone</td>
                 
  </tr>
						<?php
if($arr!="")
{
$no=1;
foreach($arr as $val)
{
?>

                <tr>
                  <td align="center" valign="middle"><?php echo $no; ?></td>
                  <td align="center" valign="middle"><?php echo $val['name']; ?></td>
                  <td align="center" valign="middle"><?php echo $val['email']; ?></td>
                  <td align="center" valign="middle"><?php echo $val['phone']; ?></td>
  </tr>
                <tr>
                  <td colspan="8"><div style="width:100%; border-bottom:dotted 1px #CCCCCC;"></div></td>
                </tr>
              
<?php
$no++;
}



}
else
{
echo"json not found";
}
?>
</table>
