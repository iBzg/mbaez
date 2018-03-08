<!DOCTYPE html> 
<html>
<head> 
<title>Comentario</title> 
<meta charset="utf-8">
<link href="/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>

<h2>Registro de comentarop</h2>
<form id="form" action="guarda_cometario.php" method="post">
<p>Ingrese la siguiente información: </p>
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre"/>
    </div>
    <div>
	<label for="email">Email:</label>
	<input type="text" id="email"/>
    </div>
    <div>
	<p>Campo para comentarios:</p>
	<textarea rows="6" cols="50" maxlength="500"><textarea/>
    </div>
	<input type="submit" value="Enviar">
</form>
	    <a href="index.php" target="_self">Página principal</a>

<hr>
</br>
</br>
<a href="www.unam.mx" target="_blank">UNAM</a>
<a href="www.fca.unam.mx" target="_blank">FCA</a>
<p>Sitio web elaborado por María Isabel Báez García. Marzo 2018.</p>

</body>
</html>
