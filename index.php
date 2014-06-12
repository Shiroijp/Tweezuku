<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/reset_anchor.css" /> 
		<link rel="stylesheet" type="text/css" href="css/960.cs" /> 
		<link rel="stylesheet" type="text/css" href="css/960_12_col.cs" /> 
		<link rel="stylesheet" type="text/css" href="css/reset.css" /> 
		<link rel="stylesheet" type="text/css" href="css/text.css" /> 
		<link rel="stylesheet" type="text/css" href="css/buttons.css" /> 
		<link rel="stylesheet" type="text/css" href="css/enviar_button.css" /> 
		<link rel="stylesheet" type="text/css" href="css/main.css" /> 
		<link rel="stylesheet" type="text/css" href="css/footer.css" /> 
		<link rel="stylesheet" type="text/css" href="css/smartphone.css" /> 
		<link rel="stylesheet" type="text/css" href="../webfonts/stylesheet.css" /> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href='http://fonts.googleapis.com/css?family=Sniglet:800' rel='stylesheet' type='text/css'>
		<title>Tweezuku</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

	<div id="main_container" class="group">

<!-- Logo -->
		<div id="logo"><a href="http://tweezuku.shiroidev.hol.es"><h1>Tweeづく</h1></a></div>
		<div class="clear"></div>
<!--      -->				

<!-- Eslogan -->
		<div id="eslogan">
			<?php include 'twitter.php'; ?>
			<p>Divide cualquier texto en fragmentos de 140 carácteres y públicalos en Twitter.</p> 
		</div>
<!--         -->				

<!-- Textarea -->
		<textarea id="TA_tweet" class="desktop_enabled" rows="18" cols="80" style="resize: none;"></textarea>
		<textarea id="TA_tweet" class="smartphone_enabled" rows="18" cols="40" style="resize: none;"></textarea>
<!--          -->

<!-- Input destinatarios + Botón Enviar -->
		<div id="container_enviar" class="group">
			<div id="input_tag" >
				<input type="text" class="desktop_enabled"  size="50" id="input_amigos" placeholder="Etiqueta a quien quieras: '@john @peter'..."/>
				<input type="text" class="smartphone_enabled" size="35" id="input_amigos" placeholder="Etiqueta a quien quieras"/>
			</div>
			<div id="boton_enviar">
	    		<button id="button_enviar" class="desktop_enabled" ><a style"float:right;margin-top:5px;margin-left:20px" id="boton_dividir_tweet" onclick="divide()">
	    		<b>Dividir</b> y Enviar</a></button>
	    		<button id="button_enviar" class="smartphone_enabled" ><a style"margin-top:5px;margin-left:20px" id="boton_dividir_tweet" onclick="divide()">
		      	<b>Dividir</b> y Enviar</a>	</button>
		  	</div>
		</div>
<!--                                    -->

	</div> <!-- main_container -->

	<!-- Footer -->
	<div id="footer" class="group">
		<div id="footer_text">
			<p>Copyright © <a href="http://shiroidev.hol.es" alt="Shiroi developments" >Shiroi</a> developments 2013. All rights reserved.</p>
		</div>
		<div id="hm_footer">&nbsp;</div>
	</div>
	<!--        -->

</body>


	<!-- Javascript links -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/textarea.js"></script>
	<script src="js/design.js"></script>




</html>
