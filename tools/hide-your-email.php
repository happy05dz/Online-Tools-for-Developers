<h2>Hide Your Email</h2>
<?php
$email = "";
$email_obfuscated = "";
$email_mailto = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $textErr = "You must enter text";
  } else {
    $email = test_input($_POST["email"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
}

function stringToHex($string) {
    $hexString = '';
    for ($i=0; $i < strlen($string); $i++) {
        $hexString .= '%' . bin2hex($string[$i]);
    }
    return $hexString;
}
?>
<p><b>Enter Email adress :</b></p>
<form class="FormManagertools" method="post" accept-charset="utf-8" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>#result">
<ul>
<li>
<input name="email" id="email" value="<?php echo $email;?>">
</li>
<li>
<input type="submit" name="submit" value="Convert" />
</li>
</ul>
</form>
<?php
if ( isset($textErr) ) {
echo '<div id="result">';
echo '<span class="error">* '.$textErr.'</span><br>';
echo '</div>';
}
echo "<p><b>Email Obfuscated :</b></p>";

if ($email <> ""){
  $email_obfuscated = stringToHex($email);  
  $email_mailto = '<a href="mailto:'.$email_obfuscated.'">Your text here</a>';
 }

echo '<div id="result">';
echo '<form class="FormManagertools"><ul><li>';
echo '<textarea name="result" class="field-style">'.$email_mailto.'</textarea></li></ul></form>';
echo '</div>';
?>
<p>&nbsp;</p>
