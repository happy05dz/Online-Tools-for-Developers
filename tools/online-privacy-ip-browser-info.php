<h2>User information privacy</h2>
<?php
//User IP:
if(isset($_SERVER["REMOTE_ADDR"])) $ip=$_SERVER["REMOTE_ADDR"];
        else $ip="Not currently known";

//---------------------------------
//Date&temps:
$date = strftime("%c",$_SERVER['REQUEST_TIME']);

//---------------------------------
//REQUEST URL:
	if (isset($_SERVER['QUERY_STRING'])) $url=$_SERVER['QUERY_STRING'];//La chaîne de requête, si elle existe
	if ( $url == '' ) { 
    if(isset($_SERVER['REQUEST_URI'])) $url=$_SERVER['REQUEST_URI'];
	}
	if(substr($url,0,2) == '/?') { $url=substr($url,2); }
	if($url == '/') { $url=''; }

//---------------------------------
//User agent:
if(isset($_SERVER['HTTP_USER_AGENT'])) $userAgent =$_SERVER['HTTP_USER_AGENT'];
else $userAgent="Not currently known";

//---------------------------------
//Page d'origine: 
if(isset($_SERVER['HTTP_REFERER'])) $origine=$_SERVER['HTTP_REFERER'];
else $origine="There is no";

//---------------------------------
//Navigateur langue:
if(isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) $langue=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
        else $langue="Not currently known";

//---------------------------------
//Systeme d'exploitation:
$file = file('./tools/systeme.inc.php');
foreach($file as $lines => $line) {
list($id,$nom)=explode(",",$line);
if(strpos($userAgent,$id)!==FALSE)
   	$systeme=$nom; 
	}

//---------------------------------
//Navigateur:
$file = file('./tools/navigateur.inc.php');
foreach($file as $lines => $line) {
list($id,$nom)=explode(",",$line);
if(strpos($userAgent,$id)!==FALSE)
    $navigateur=$nom;
     }

//---------------------------------
//IP pays
$ipnombre=$ip;//user IP
$ipnombre = preg_split( "/[.]+/", $ipnombre);//preg_split — Éclate une chaîne par expression rationnelle
$ip_nombre = (double) ($ipnombre[0]*16777216)+($ipnombre[1]*65536)+($ipnombre[2]*256)+($ipnombre[3]);//convertir l'adresse IP en un format numérique
$ipnombre = $ip_nombre;
$Pays='Not currently known';
$file = file('./tools/ip_pays.inc.php');
foreach($file as $lines => $line) {
	list($c_ipnombre, $f_ipnombre, $id_ip, $n_pays) = explode(',', $line);//par ex: 2130706433,2130706433,Localhost,Localhost,
	if ($ipnombre>=$c_ipnombre and $ipnombre<=$c_ipnombre){
$Pays=$n_pays;
	}
}

//Screen resolution
$sw ="<script language=\"JavaScript\">
document.write(screen.width)
</script>";
$sh ="<script language=\"JavaScript\">
document.write(screen.height)
</script>";

$fullurl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//---------------------------------
//User info
echo '<span style="color: #0080FF; font-weight: bold;">IP Address : </span>'.$ip;
echo '<br><span style="color: #0080FF; font-weight: bold;">Country : </span>'.$Pays;
echo '<br><span style="color: #0080FF; font-weight: bold;">The language : </span>'.$langue;
echo '<br><span style="color: #0080FF; font-weight: bold;">OS : </span>'.$systeme;
echo '<br><span style="color: #0080FF; font-weight: bold;">User Agent : </span>'.$userAgent;
echo '<br><span style="color: #0080FF; font-weight: bold;">Browser : </span>'.$navigateur;
echo '<br><span style="color: #0080FF; font-weight: bold;">Screen resolution : </span>'; 
echo $sh.'X'.$sw; 
echo '<br><span style="color: #0080FF; font-weight: bold;">Previous Page : </span>'.$origine;
echo '<br><span style="color: #0080FF; font-weight: bold;">Current page : </span>'.$fullurl;
echo '<br><span style="color: #0080FF; font-weight: bold;">Date and time : </span>'.$date;
?>
<p>&nbsp;</p>


