<?php
   
    $sarasas = json_decode(file_get_contents(__DIR__ . '/data.json', 1));
    //sort
    usort($sarasas, function($a, $b) {return strcmp($a->pavarde, $b->pavarde);});
    file_put_contents(__DIR__ . '/data.json', json_encode($sarasas));

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: grey">
    <?php include 'header.php' ?>   
    <?php foreach($sarasas as $indexas => $value): ?>
        <div style="margin: 50px; background-color: offwhite">
    <?php foreach($value as $index => $name): ?>
    
        <li><?= $name ?></li>
         
    <?php endforeach ?>
        <a style="font-size: 13px; border-radius: 5px; border: 2px black; color: white; text-decoration: none; background-color: black" href="http://localhost/iguanos/bank/debitAccount.php?index=<?= $indexas ?>">Debit</a>
        <a style="font-size: 13px; border-radius: 5px; border: 2px black; color: white; text-decoration: none; background-color: black" href="http://localhost/iguanos/bank/creditAccount.php?index=<?= $indexas ?>">Credit</a>
        <a style="font-size: 13px; border-radius: 5px; border: 2px black solid; color: white; text-decoration: none; background-color: crimson" href="http://localhost/iguanos/bank/deleteAccount.php?index=<?= $indexas ?>">Delete account</a>
    </div>
    <?php endforeach ?>

 
</body>
</html>