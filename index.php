<html>
<head><title>Mixreferences</title>
<link rel="stylesheet" href="./accets/style.css">
<link type="image/x-icon" href="./img/favicon.ico" rel="shortcut icon">
<body>
<header class="logo _container"><h1>Mix 2 reference</h1></header>
<main class="main _container">
<?php
function randomref($dir) {
$img_a = array(); 

if (is_dir($dir)){  
	if($od = opendir($dir)){ 
		while(($file = readdir($od)) !== false){ 
			if(strtolower(strstr($file, "."))===".jpg" || strtolower(strstr($file, "."))===".gif" || strtolower(strstr($file, "."))===".png"){ 
				array_push($img_a, $file);
			}
		}
		closedir($od); 
	}
}

$rd = rand(0, count($img_a)-1);
return '<img src=' . $dir.$img_a[$rd] . ' weidth="450px" height="450px">';

}

$dir = './resources/bd1/'; 
$result=randomref($dir);
echo $result;

$dir = './resources/bd2/'; 
$result=randomref($dir);
echo $result;

?>
<div class="_container"><button type="sumbit" value="Refresh Page" onClick="window.location.reload();">Reload</button></div>

</main>
</body>
</html>