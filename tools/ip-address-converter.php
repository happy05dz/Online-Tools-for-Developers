<h2>IP Address Converter</h2>
<?php
$ip = "";
$textErr = "";
$ipErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ip"])) {
    $textErr = "You must enter adresse IP";
	$ip ="";
  } else {
    $ip = $_POST["ip"];
  }
  if (filter_var($ip, FILTER_VALIDATE_IP) == FALSE) {
    $ipErr = $ip." is not a valid IP address";
	$ip ="";
   } else {
   $ipdecimal = preg_split( "/[.]+/", $ip);
   $ipdecimal = (double) ($ipdecimal[0]*16777216)+($ipdecimal[1]*65536)+($ipdecimal[2]*256)+($ipdecimal[3]);			
   $ipbinary = decbin ($ipdecimal);
   }
}

?>
<p><b>IP Address :</b></p>
<form class="FormManagertools" method="post" accept-charset="utf-8" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>#result">
<ul>
<li>
<input name="ip" id="ip" value="<?php echo $ip;?>" placeholder="127.0.0.1">
</li>
<li>
<input type="submit" name="submit" value="Convert" />
</li>
</ul>
</form>
<?php
if ((isset($textErr)) || (isset($ipErr)))  {
echo '<div id="result">';
if ($textErr <> "") {
echo '<span class="error">* '.$textErr.'</span><br>';}
if ($ipErr <> "") { 
echo '<span class="error">* '.$ipErr.'</span><br>';}
echo '</div>';
}

if ($ip <> ""){
echo '<div id="result">';
echo '<p><b>Results for: </b>'.$ip.'</p>';
echo '<ul>';
echo '<li>Dotted Quad:'.$ip.'</li>';
echo '<li>Decimal: '.$ipdecimal.'</li>';
echo '<li>32-bit Binary: '.$ipbinary.'</li>';
echo '<li>URL: <a target="_blank" href="http://'.$ipdecimal.'">http://'.$ipdecimal.'</a></li>'; 
echo '</ul>';
echo '</div>';
 }
?>
<p>&nbsp;</p>
