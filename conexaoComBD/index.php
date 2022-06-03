<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão com BD</title>
    <link href="./css/style.css" rel="stylesheet"/>
</head>
<body>
    <?php
     function conexao(){
        $mysqli_connection = new MySQLi('localhost', 'root', '', 'test');
        if($mysqli_connection->connect_error){
            echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
        }else{
            echo "Conectado!";
            echo "<br>";
            echo "<br>";
            echo "Lista de banco de dados encontrados no servidor: ";
            echo "<br>";
            echo "<br>";
        }
        return $mysqli_connection;
    }
        $con=conexao();
        $con->set_charset("utf8");
    
        $r	= $con->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA");
    
        while ($row = $r->fetch_object()) {
            $db = $row->SCHEMA_NAME;
            echo $db."<br>";
        }
    
    ?>
</body>
</html>