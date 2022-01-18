<?php
require_once '../controlador/controlador.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/styles.css" />
	<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv-printshiv.min.js" type="text/javascript"></script><![endif]-->
</head>
<body>
	<h1><a href="<?php echo $anterior; ?>">anterior</a><?php echo $video_titulo; ?><a href="<?php echo $siguiente; ?>">siguiente</a></h1>
	<figure id="videoContainer" data-fullscreen="false">
		<video id="video" controls preload="metadata" poster="img/poster.jpg">
			<source src="<?php echo $video_mp4; ?>" type="video/mp4">
			<source src="<?php echo $video_webm; ?>" type="video/webm">
			<source src="<?php echo $video_ogg; ?>" type="video/ogg">
			<a href="<?php echo $video_mp4; ?>">Download MP4</a>
		</video>
		<div id="video-controls" class="controls" data-state="hidden">
			<button id="playpause" type="button" data-state="play">Play/Pause</button>
			<button id="stop" type="button" data-state="stop">Stop</button>
			<div class="progress">
				<progress id="progress" value="0" min="0">
					<span id="progress-bar"></span>
				</progress>
			</div>
			<button id="mute" type="button" data-state="mute">Mute/Unmute</button>
			<button id="volinc" type="button" data-state="volup">Vol+</button>
			<button id="voldec" type="button" data-state="voldown">Vol-</button>
			<button id="fs" type="button" data-state="go-fullscreen">Fullscreen</button>
		</div>
		<figcaption>
			&copy; <?php echo $video_copyright; ?> | <a href="<?php echo $company_link; ?>"><?php echo $company_name; ?></a>
		</figcaption>
	</figure>
	<script src="js/video-player.js"></script>
</body>
</html>
