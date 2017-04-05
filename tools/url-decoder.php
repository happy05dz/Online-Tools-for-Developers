<h2>URL Decoder</h2>

<?php
$text = "";
$urldecode = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["text"])) {
    $textErr = "You must enter text";
  } else {
    $text = test_input($_POST["text"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<p><b>Enter the encrypted link :</b></p>
<form class="FormManagertools" method="post" accept-charset="utf-8" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>#result">
<ul>
<li>
<textarea name="text" class="field-style"><?php echo $text;?></textarea>
</li>
<li>
<input type="submit" name="submit" value="Decode" />
</li>
</ul>
</form>
<?php
if ( isset($textErr) ) {
echo '<div id="result">';
echo '<span class="error">* '.$textErr.'</span><br>';
echo '</div>';
}
echo "<p><b>URL Decoded :</b></p>";

if ($text <> ""){
  $urldecode = urldecode($text);  
 }

echo '<div id="result">';
echo '<form class="FormManagertools"><ul><li>';
echo '<textarea name="result" class="field-style">'.$urldecode.'</textarea></li></ul></form>';
echo '</div>';
?>
<p>&nbsp;</p>
