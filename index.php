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
       <META NAME="Description" CONTENT="NO Description">
       <META NAME="Keywords" CONTENT="------------------------">
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	<li><a href="?id=rot13-encoder" title="ROT13 Encoder">ROT13 Encoder</a></li>
	<li><a href="?id=rot47-decoder" title="ROT13 Decoder">ROT13 Decoder</a></li>
  </ul>  
 </div>

 <div class="right">
  <ul>
	<li><a href="?id=url-encoder" title="URL Encoder">URL Encoder</a></li>
	<li><a href="?id=url-decoder" title="URL Decoder">URL Decoder</a></li>
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
	<li><a href="?id=md5-generator" title="MD5 Generator">MD5 Generator</a></li>
	<li><a href="?id=SHA-256-generator" title="SHA-256 Generator">SHA-256 Generator</a></li>
  </ul>  
 </div>

 <div class="right">
  <ul>
	<li><a href="?id=SHA-512-generator" title="SHA-512 Generator">SHA-512 Generator</a></li>
	<li><a href="?id=..." title="HMAC Generator">HMAC Generator</a></li>
  </ul>  
 </div>
</div>
<!-- Search engine optimization Tools -->
<div id="tools-category">
<h3>Search engine optimization Tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=css-compressor" title="CSS Minifier">CSS Minifier</a></li>
	<li><a href="?id=..." title="Advanced Robots TXT Generator">Advanced Robots TXT Generator</a></li>
  </ul>  
 </div>

 <div class="right">
  <ul>

  </ul>  
 </div>
</div>
<!-- Webmaster Tools -->
<div id="tools-category">
<h3>Webmaster Tools</h3>
 <div class="left">
  <ul>
	<li><a href="?id=..." title="Robots.txt Validator">Robots.txt Validator</a></li>
	<li><a href="?id=online-privacy-ip-browser-info" title="user information privacy">user information privacy</a></li>
  </ul>  
 </div>

 <div class="right">
  <ul>

  </ul>  
 </div>
</div>
<!-- Webmaster Tools -->
<div id="tools-category">
<h3>String Escaper & Utilites</h3>
 <div class="left">
  <ul>
	<li><a href="?id=..." title="Robots.txt Validator">String Utilities</a></li>

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

 <div class="right">
  <ul>

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