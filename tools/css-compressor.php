<h2>CSS Minifier</h2>
<br>

<?php
// define variables and set to empty values
$textErr = "";
$text = "";
$css_comp = "";

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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>#result">  
<label><b>Original CSS :</b><br /> 
<textarea name="text" rows="10" cols="80"><?php echo $text;?></textarea><br />
<span class="error">* <?php echo $textErr;?></span>
<input type="submit" name="submit" value="Compress">  
</form>

<?php
echo "<br /><b>Compressed CSS :</b><br />";
//echo $text;

if ($text <> ""){
  $eContent = explode('}', $text ); 
foreach ($eContent as $key => $value)  
{ 
 $eContent[$key] = trim($value," \t\n\r\0\x0B"); 
} 
foreach ($eContent as $key => $value)  
{ 

 $eContent[$key] = explode('{', $value ); 

 if( empty($eContent[$key]) || count($eContent[$key]) !== 2 || empty($eContent[$key][0]) ){ 

  unset($eContent[$key]);  
 }else{ 
  $eContent[$key][0] = str_replace("\n",'',trim($eContent[$key][0]," \t\n\r\0\x0B")); 
  $eContent[$key][0] = str_replace("\t",'',trim($eContent[$key][0]," \t\n\r\0\x0B")); 
  $eContent[$key][0] = str_replace("\r",'',trim($eContent[$key][0]," \t\n\r\0\x0B")); 
  $eContent[$key][0] = str_replace("  ",'',trim($eContent[$key][0]," \t\n\r\0\x0B")); 
  $eContent[$key][1] = str_replace("\n",'',trim($eContent[$key][1]," \t\n\r\0\x0B"));  
  $eContent[$key][1] = str_replace("\t",'',trim($eContent[$key][1]," \t\n\r\0\x0B")); 
  $eContent[$key][1] = str_replace("\r",'',trim($eContent[$key][1]," \t\n\r\0\x0B")); 
  $eContent[$key][1] = str_replace("  ",'',trim($eContent[$key][1]," \t\n\r\0\x0B"));  
 } 

} 

$i = 1;  
$out =  $outFile = '';  
$iStop = count($eContent); 
foreach ($eContent as $key => $value) { 
  
 $outFile .= $eContent[$key][0].'{'.$eContent[$key][1].'}'; 

 if($i !== $iStop){ $outFile .= "\n"; } 
 $i++; 
} 

//file_put_contents($fileCompressed, $outFile);
  
 $css_comp = $outFile; 
}

echo '<div id="result">';
echo '<form class="FormManagertools"><ul><li>';
echo '<textarea name="result" rows="10" cols="80">'.$css_comp.'</textarea></li></ul></form>';
echo '</div>';
?>
<p>&nbsp;</p>	
