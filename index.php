<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
<?php
require __DIR__ . "/vendor/autoload.php"; 
//use App\DBconnect;
use App\QueryCatch;
$a=new QueryCatch('santidade');
//$a->select();
print_r($a);
?>
</pre>
</body>
</html>
