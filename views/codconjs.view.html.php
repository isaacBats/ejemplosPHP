<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Codificacion con JS</title>
</head>
<body>
	<header>
		<h1>Encoding using JavaScrip</h1>
	</header>
	<section>
		<h4>LOGIN</h4>
		<form method="post" action="codificacion.php" onsubmit="onEnviar()" >
			<input id="variable" name="variable" type="hidden" />
			<input type="text" name="user" placeholder="User" />
			<input id="pass" type="password" name="pass" placeholder="Password" />
			<input type="submit" value="SING IN" />
		</form>
	</section>
	<footer>
		<script type="text/javascript" src="../assets/js/node_modules/crypto-js/crypto-js.js"></script>
		<script type="text/javascript" src="../assets/js/codconjs.js"></script>
		<p><strong>Powered by Isaac Batista <a href="https://twitter.com/codeisaac" target="_blank">@codeisaac</a></strong></p>
	</footer>
</body>
</html>