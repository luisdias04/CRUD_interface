<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access to database</title>
</head>
<body>
<pre>
<?php

require __DIR__ . "/vendor/autoload.php";

use Src\GetAllStructureOfConnectedDataBase;

$resultQuery = new GetAllStructureOfConnectedDataBase("contabilidade");

print_r($resultQuery);
    
?>
</pre>
</body>
</html>
