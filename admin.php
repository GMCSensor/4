<?php

//PAGINA ADMIN 
require("connessione.php");
session_start();
unset($_SESSION['id']);
unset($_SESSION['nome']);
unset($_SESSION['codice']);

header("location:index.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link href="stile.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8" />
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<div id="menu" align="center">
<h2> ADMIN </h2>
<h3> Menu </h3>
<div align="center" style="border: solid 2px #ff7738; border-radius:10px;"><br>
<button class="bottone" onclick="window.location.href='gestioneCliente.php'">Gestione clienti</button>
<button class="bottone" onclick="window.location.href='gestioneSensore.php'">Gestione sensori</button>
<button class="bottone" onclick="window.location.href='recuperaDati.php'">Recupera dati</button>
<button class="bottone" onclick="window.location.href='tipoSensore.php'">Inserisci tipo di sensore</button>
<button class="bottone" onclick="window.location.href='logout.php'">Logout</button>
<br><br>
</div>
</div>

</body>
</html>
