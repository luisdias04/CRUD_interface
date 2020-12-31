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

//require __dir__."/vendor/autoload.php"; 
//->não esta funcionando preciso instalar ainda

require_once("autoload.php");

/*coloque a senha do Banco como ecrever uma frase
Exemplo:"localhost nomeBanco usuario Senha"
ou deixe no sweet e ele carrega automaticamente digitando somente uma palavra
*/
$a= new Connect('localhost contabilidade root');
print_r($a);
?>
</pre>
</body>
</html>
