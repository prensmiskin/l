<?php 
try{
	$db = new PDO ("mysql:host=localhost;dbname=androidthree","root","");

}catch(PDOException $mesaj){
	print $mesaj->getmessage();

}
$ver = $db->prepare("select * from fitnesstthree");

$ver->execute(array());
$list = $ver->fetchAll();
foreach ($list as $key) {

	$f  = $key[1];
	print(json_encode($f));
}

?>