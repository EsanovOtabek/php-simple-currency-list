<!DOCTYPE html>
<html>
<head>
	<title>Valyuta Kursi LifePC</title>

<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'/>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>

<title>Valyutalar kursi</title>

</head>
<body>
<h1 align="center">Valyuta kurslari</h1>
<?
$str="";
$link = file_get_contents("https://nbu.uz/uz/exchange-rates/index.php");
echo '<div class="';
for ($i=0; $i <strlen($link);$i++) { 	
	if ($link[$i]=='e'&&$link[$i+1]=='x'&&$link[$i+2]=='c'&&$link[$i+3]=='h'&&$link[$i+4]=='_'&&$link[$i+5]=='t'&&$link[$i+6]=='a') {
		$start=true;
	}
		if($start) $str.=$link[$i];
	if ($link[$i]=='e'&&$link[$i+1]=='x'&&$link[$i+2]=='c'&&$link[$i+3]=='h'&&$link[$i+4]=='_'&&$link[$i+5]=='q'&&$link[$i+6]=='u') {
		$start=false;
	}
}
$str=str_replace("/local/templates", "https://nbu.uz/uz/exchange-rates/local/templates", $str);
$str=str_replace("Boshqa kurslarni ko`rsatish", "Boshqa kurslar", $str);
	echo $str;
?>

</body>
</html>