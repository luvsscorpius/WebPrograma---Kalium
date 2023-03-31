<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host = "localhost";
    $username = "tecinfo_205";
    $password = "teste123456";
    $dbname = "senac_bd";
	$porta = "3308";
	$conexao = mysqli_connect("$host:$porta", $username, $password, $dbname);
	if (!$conexao)
	{
		die("Ocorreu o seguinte erro: ".mysqli_connect_error());
	}
    ?>
</body>
</html>