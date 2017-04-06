<h2>Convert Images to Base64</h2>
<?php
$dataUrl = "";
$uploadOk = 1;
$fileErr = "";
?>
<p><b>Select your JPG, PNG, GIF, or BMP picture :</b></p>
<form class="FormManagertools" method="post" accept-charset="utf-8" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>#result">
<ul>
<li>
<label for="file">Filename:</label> <input type="file" name="file" id="file">
</li>
<li>
<input type="submit" name="submit" value="Convert" />
</li>
</ul>
</form>
<?php
if ( isset($_FILES["file"]) ) {
if ($_FILES["file"]["error"] > 0)
  {
   $fileErr = $_FILES["file"]["error"];
  }
else
  {
  $image =  $_FILES["file"]["name"];
  $imageFileType = pathinfo($image, PATHINFO_EXTENSION);
  // Allow certain file formats
   if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
   $uploadOk = 0;
   }
     if ($uploadOk <> 0) {   
     $data = file_get_contents($_FILES["file"]["tmp_name"]);
      $dataUrl = 'data:image/' . $imageFileType . ';base64,' . base64_encode($data); 
      }
   } 
}

if (($fileErr <> "") || ($uploadOk == 0)) {
echo '<div id="result">';
echo '<span class="error">* Sorry, only JPG, JPEG, PNG & GIF files are allowed.'.$fileErr.'</span><br>';
echo '</div>';
}
echo "<p><b>Converted image :</b></p>";

echo '<div id="result">';
echo '<form class="FormManagertools"><ul><li>';
echo '<textarea name="result" class="field-style">'.$dataUrl.'</textarea></li></ul></form>';
echo '</div>';
?>
<p>&nbsp;</p>
