<h2>Convert GIF to PNG</h2>
<?php
$uploadOk = 1;
$fileErr = "";
?>
<p><b>Select your GIF picture :</b></p>
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

if (isset($_FILES["file"])) {
if ($_FILES["file"]["error"] > 0)
  {
   $fileErr = $_FILES["file"]["error"];
  }
else
  {
  $image =  $_FILES["file"]["name"];
  $imageFileType = pathinfo($image, PATHINFO_EXTENSION);
  // Allow gif file formats
   if($imageFileType != "gif") {
   $uploadOk = 0;
   }
     if ($uploadOk <> 0) { 
     $data = $_FILES["file"]["tmp_name"];
	 
	 $im = imagecreatefromgif($data);
     if ($im !== false) {
 
	 $file = basename($_FILES["file"]["name"],".gif").'.png';	

     $img = imagepng($im, $file);

      if (file_exists($file)) {
      header('Location: tmp/download.php?file='.$file.'');
      exit;
      }
      imagedestroy($im);
     }
      else {
    echo 'An error occurred.';
       }
   } 
  }
}
if (($fileErr <> "") || ($uploadOk == 0)) {
echo '<div id="result">';
echo '<span class="error">* Sorry, only GIF files are allowed.'.$fileErr.'</span><br>';
echo '</div>';
}
?>
<p>&nbsp;</p>
