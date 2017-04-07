<h2>HMAC Generator</h2>
<?php
$text = "";
$password = "";
$hmac_encrypt = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ((empty($_POST["text"])) || (empty($_POST["encrypt-pass"]))) {
    $textErr = "You must enter text";
  } else {
    $text = test_input($_POST["text"]);
	$password = test_input($_POST["encrypt-pass"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<p><b>Enter text :</b></p>
<form class="FormManagertools" method="post" accept-charset="utf-8" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>#result">
<ul>
<li>
<textarea name="text" class="field-style"><?php echo $text;?></textarea>
</li>
<li>
<b>Password :</b> <input name="encrypt-pass" id="encrypt-pass" value="<?php echo $password;?>">
</li>
<li>
<input type="submit" name="submit" value="Encode" />
</li>
</ul>
</form>
<?php
if ( isset($textErr) ) {
echo '<div id="result">';
echo '<span class="error">* '.$textErr.'</span><br>';
echo '</div>';
}
echo "<p><b>Encoded text :</b></p>";

if ($text <> ""){
  $hmac_encrypt = hash_hmac('ripemd160', $text,$password);  
 }

echo '<div id="result">';
echo '<form class="FormManagertools"><ul><li>';
echo '<textarea name="result" class="field-style">'.$hmac_encrypt.'</textarea></li></ul></form>';
echo '</div>';
?>
<p>&nbsp;</p>
