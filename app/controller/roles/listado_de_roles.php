<?php

$sql_roles    = "SELECT * FROM roles WHERE estado = TRUE";
$query_roles  = $pdo->prepare($sql_roles);
$query_roles->execute();
$roles = $query_roles->fetchAll(PDO::FETCH_ASSOC);

?>