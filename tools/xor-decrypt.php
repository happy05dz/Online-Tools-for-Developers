<h2>XOR Decryptor</h2>
<?php
$text = "";
$password = "";
$xor_dencrypt = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ((empty($_POST["text"])) || (empty($_POST["xor-encrypt-pass"]))) {
    $textErr = "You must enter text";
  } else {
    $text = test_input($_POST["text"]);
	$password = test_input($_POST["xor-encrypt-pass"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function xor_string($string, $key) {
    $str_len = strlen($string);
    $key_len = strlen($key);

    for($i = 0; $i < $str_len; $i++) {
        $string[$i] = $string[$i] ^ $key[$i % $key_len];
    }

    return $string;
}
?>
<p><b>Enter text :</b></p>
<form class="FormManagertools" method="post" accept-charset="utf-8" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>#result">
<ul>
<li>
<textarea name="text" class="field-style"><?php echo $text;?></textarea>
</li>
<li>
<b>Password :</b> <input name="xor-encrypt-pass" id="xor-encrypt-pass" value="<?php echo $password;?>">
</li>
<li>
<input type="submit" name="submit" value="Decrypt" />
</li>
</ul>
</form>
<?php
if ( isset($textErr) ) {
echo '<div id="result">';
echo '<span class="error">* '.$textErr.'</span><br>';
echo '</div>';
}
echo "<p><b>Decrypted text :</b></p>";

if ($text <> ""){
  $xor_dencrypt = xor_string($text,$password);  
 }

echo '<div id="result">';
echo '<form class="FormManagertools"><ul><li>';
echo '<textarea name="result" class="field-style">'.$xor_dencrypt.'</textarea></li></ul></form>';
echo '</div>';
?>
<p>&nbsp;</p>
