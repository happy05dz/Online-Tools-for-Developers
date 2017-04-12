<?php
/*                        # ##  ##  ##  #
                       ####################
                     ####      # #  #     ####
                  ###                         ###
                 ###                 #####     ###      
                ###    #######                  ###
               ###     ###### #      ######      ###
               ###     # ## #        # ## #      ###
               ###     ######        ######      ###
               ###             ###               ###
               ###             ###               ###
               ######          ###            ######
               ###   ###                   ###   ###
                ###  ## ###################  ## ###
                 ### ##   ##    ##   ##   ## #####
                  ### #   ##    ##   ##   ##  ###
                    ###   ##    ##   ##   # ###
                     #### ##    ##   ##   ####
                         #####  ##    #####
                              ########

=============================================================
            _.---[Online Tools for Developers]---._
By: H@PPyZERØ5
E-mail: happy05@programmer.net
Github: https://github.com/happy05dz 
==============================================================*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
  <head>
       <title>Online Tools for Developers</title>
       <link href="./css/style.css" rel="stylesheet" type="text/css">
       <META NAME="Description" CONTENT="Collection of Tools for Software Developers,These tools include several formatters, validators, code minifiers, string escapers,...">
       <META NAME="Keywords" CONTENT="HTML,CSS,JavaScript,SQL,PHP,jQuery,XML,DOM,Bootstrap,Web development,tools">
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	   <script src="js/jquery.min.js"></script>
  </head>

<body>
   <div id="content">
	<div id="logo">
    <a href="index.php" title="banner"><img src="./images/banner.gif" alt="Online Tools for Developers" border="0" align="center"></img></a>
    </div> 

<br><br>
<?php

if (isset($_GET["id"]))
    {
       if (is_file('./tools/'.$_GET["id"].'.php')) {
         include('./tools/'.$_GET["id"].'.php');
        } else {
		       header("Location: 404.php");
		       }
	}
	else {
?>
<h2>Online Tools for Developers</h2>
<p>Collection of Tools for Software Developers,These tools include several formatters, validators, code minifiers, string escapers, 
encoders and decoders, message digesters, web resources and more. </p>
<!-- Encoders & decoders Tools -->
<div id="tools-category">
<h3>Encoders & decoders Tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=base64-encoder" title="Base64 Encoder">Base64 Encoder</a></li>
	<li><a href="?id=base64-decoder" title="Base64 Decoder">Base64 Decoder</a></li>
	<li><a href="?id=gzdeflate-base64-encoder" title="gzdeflate & base64 encode">gzdeflate & base64 encode</a></li>
	<li><a href="?id=gzdeflate-base64-decoder" title="base64 decode & gzinflate">base64 decode & gzinflate</a></li>
  </ul>  
 </div>
 
 <div class="middle">
  <ul>
 	<li><a href="?id=rot13-encoder" title="ROT13 Encoder">ROT13 Encoder</a></li>
	<li><a href="?id=rot47-decoder" title="ROT13 Decoder">ROT13 Decoder</a></li>
	<li><a href="?id=url-encoder" title="URL Encoder">URL Encoder</a></li>
	<li><a href="?id=url-decoder" title="URL Decoder">URL Decoder</a></li>
  </ul>  
 </div>

 <div class="right">
  <ul>
	<li><a href="?id=rot47-encoder" title="ROT47 Encoder">ROT47 Encoder</a></li>
	<li><a href="?id=rot47-decoder" title="ROT47 Decoder">ROT47 Decoder</a></li>
	<li><a href="?id=xor-encrypt" title="XOR Encrypt">XOR Encrypt</a></li>
	<li><a href="?id=xor-decrypt" title="XOR Decrypt">XOR Decrypt</a></li>
  </ul>  
 </div>
</div>
<!-- Cryptography & Security Tools -->
<div id="tools-category">
<h3>Cryptography & Security Tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=md2-generator" title="MD2 Generator">MD2 Generator</a></li>
	<li><a href="?id=md4-generator" title="MD4 Generator">MD4 Generator</a></li>
	<li><a href="?id=md5-generator" title="MD5 Generator">MD5 Generator</a></li>
	<li><a href="?id=sha1-generator" title="SHA1 Generator">SHA1 Generator</a></li>
  </ul>  
 </div>

 <div class="middle">
  <ul>
	<li><a href="?id=SHA-224-generator" title="SHA-224 Generator">SHA-224 Generator</a></li>
	<li><a href="?id=SHA-256-generator" title="SHA-256 Generator">SHA-256 Generator</a></li>
	<li><a href="?id=SHA-384-generator" title="SHA-384 Generator">SHA-384 Generator</a></li>
	<li><a href="?id=SHA-512-generator" title="SHA-512 Generator">SHA-512 Generator</a></li>
  </ul>  
 </div>

 <div class="right">
  <ul>
	<li><a href="?id=hmac-generator" title="HMAC Generator">HMAC Generator</a></li>
	<li><a href="?id=crc32-generator" title="CRC32 Generator">CRC32 Generator</a></li>
  </ul>  
 </div>
</div>
<!-- Webmaster Tools -->
<div id="tools-category">
<h3>Webmaster Tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=online-privacy-ip-browser-info" title="user information privacy">user information privacy</a></li>
	<li><a href="?id=convert-html-to-text" title="Convert HTML to Text">Convert HTML to Text</a></li>
  </ul>  
 </div>
 
 <div class="middle">
  <ul>
	<li><a href="?id=ip-address-converter" title="IP Address Converter">IP Address Converter</a></li>
	<li><a href="?id=html-obfuscate" title="HTML Obfuscate">HTML Obfuscate</a></li>	
  </ul>  
 </div>
 
 <div class="right">
  <ul>
	<li><a href="?id=hide-your-email" title="Hide Your Email">Hide Your Email</a></li>	
	<li><a href="?id=color-chooser" title="Color Chooser">Color Chooser</a></li>	
  </ul>  
 </div>
</div>
<!-- Search engine optimization Tools -->
<div id="tools-category">
<h3>Search engine optimization Tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=css-compressor" title="CSS Minifier">CSS Minifier</a></li>
  </ul>  
 </div>
 
 <div class="middle">
  <ul>

  </ul>  
 </div>
 
 <div class="right">
  <ul>

  </ul>  
 </div>
</div>
<!-- Image tools -->
<div id="tools-category">
<h3>Image tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=image-to-base64" title="Convert Images to Base64">Convert Images to Base64</a></li>
	<li><a href="?id=convert-jpg-to-png" title="Convert JPG to PNG">Convert JPG to PNG</a></li>
	<li><a href="?id=convert-png-to-jpg" title="Convert PNG to JPG">Convert PNG to JPG</a></li>
  </ul>  
 </div>
 
 <div class="middle">
  <ul>
	<li><a href="?id=convert-gif-to-png" title="Convert GIF to PNG">Convert GIF to PNG</a></li>
	<li><a href="?id=convert-gif-to-jpg" title="Convert GIF to JPG">Convert GIF to JPG</a></li>
	<li><a href="?id=convert-bmp-to-png" title=">Convert BMP to PNG">Convert BMP to PNG</a></li>
  </ul>  
 </div>
 
 <div class="right">
  <ul>
	<li><a href="?id=convert-bmp-to-jpg" title="Convert BMP to JPG">Convert BMP to JPG</a></li>
  </ul>  
 </div>
</div>
<!-- Webmaster Tools -->
<div id="tools-category">
<h3>String Escaper & Utilites</h3>
 <div class="left">
  <ul>
	<li><a href="?id=..." title="...">String Utilities</a></li>

  </ul>  
 </div>
 
 <div class="middle">
  <ul>

  </ul>  
 </div>
 
 <div class="right">
  <ul>

  </ul>  
 </div>
</div>
<!-- Resources -->
<div id="tools-category">
<h3>Resources</h3>
 <div class="left">
  <ul>
	<li><a href="?id=html-entities" title="HTML Entity List">HTML Entity List</a></li>
  </ul>  
 </div>
 
 <div class="middle">
  <ul>
	<li><a href="?id=r-packages-list" title="R Packages List">R Packages List</a></li>
  </ul>  
 </div>
 
 <div class="right">
  <ul>
	<li><a href="?id=linux-commands" title="Linux Command Examples">Linux Command Examples</a></li>
  </ul>  
 </div>
</div>
<p>&nbsp;</p>

<?php
	}
?>
 <!-- Footer -->
<div class="toolsmenu">
   &nbsp;&nbsp;H@PPyZERØ5 in <a rel="nofollow" href="https://github.com/happy05dz" title="happy05dz">Github</a>&nbsp;&nbsp;
   Email: <a rel="nofollow" href="mailto:happy05@programmer.net" title="happy05dz">happy05@programmer.net</a>
  </div>
</div><!-- End content -->
 </body>
</HTML>