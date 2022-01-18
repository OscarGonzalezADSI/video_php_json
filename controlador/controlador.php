<?php
require_once '../modelo/data_json.php';
$data = json_decode($data, true);

$lang = $data['lang'];
$title = $data['title'];
$company = $data['company'];
$videos = $data['videos'];
$video_seleccionado = $data['video_seleccionado'];

$company_name = $company['company_name'];
$company_link = $company['company_link'];

$video = $videos[$video_seleccionado];

$video_titulo = $video['video_titulo'];
$video_copyright = $video['video_copyright'];
$video_mp4 = $video['video_mp4'];
$video_webm = $video['video_webm'];
$video_ogg = $video['video_ogg'];

if(isset($_GET['vs']) && !empty($_GET['vs'])){
	if(is_numeric($_GET['vs'])){
		$video_seleccionado = $_GET['vs'];
		$video_seleccionado -= 1;
		if (count($videos) > $video_seleccionado){
			$video = $videos[$video_seleccionado];
			$video_titulo = $video['video_titulo'];
			$video_copyright = $video['video_copyright'];
			$video_mp4 = $video['video_mp4'];
			$video_webm = $video['video_webm'];
			$video_ogg = $video['video_ogg'];
			$video_seleccionado += 2;
			$siguiente = htmlspecialchars($_SERVER["PHP_SELF"])."?vs=".$video_seleccionado;
			$video_seleccionado -= 2;
			if($video_seleccionado < 1){
				$video_seleccionado = count($videos);
			}
			$anterior = htmlspecialchars($_SERVER["PHP_SELF"])."?vs=".$video_seleccionado;
		}else{
			header("Location: " . htmlspecialchars($_SERVER["PHP_SELF"])."?vs=1");
		}
	}else{
		header("Location: " . htmlspecialchars($_SERVER["PHP_SELF"])."?vs=1");
	}
}else{
	$siguiente = htmlspecialchars($_SERVER["PHP_SELF"])."?vs=1";
	$anterior = htmlspecialchars($_SERVER["PHP_SELF"])."?vs=".count($videos);
}
