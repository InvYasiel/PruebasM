<?php 

$pdo=new PDO("mysql:dbname=reservas;host=127.0.0.1","root","");
$statement=$pdo->prepare("SELECT * FROM registro");
$statement->execute();
if (!$statement){
    echo 'Error al ejecutar la consulta';
}else{
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo  json_encode($results);
}

?>
