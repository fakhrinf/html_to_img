<?php 
session_start();

$a = base64_decode(explode(",", $_POST['data'])[1]);

$filename = md5(uniqid(rand(), true));

$pth = $_SERVER['DOCUMENT_ROOT'] . "/timestamp/drive/output/";

$file = $pth.$filename.'.jpg';

$server = $_SERVER['HTTP_HOST'];
try {
	//code...
	file_put_contents($file,$a);
	echo "http://{$server}/timestamp/drive/output/{$filename}.jpg";
	// header('Location: '. $file);
} catch (\Exception $th) {
	//throw $th;
	echo $th->getMessage;
}

?>