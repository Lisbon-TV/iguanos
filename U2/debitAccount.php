<?php

//GET
    

if(isset($_GET)){
    $indexPasirinkto = ($_GET['index']);

}



//POST
if('POST' == $_SERVER['REQUEST_METHOD']){


    $norimaSuma = $_POST ;
    var_dump($norimaSuma['likutis']);
   
    $sarasas = json_decode(file_get_contents(__DIR__ . '/data.json'),1);
    foreach($sarasas as $index => $value){
        if($indexPasirinkto == $index){
            if($sarasas[$index]['likutis'] >=(int)$norimaSuma['likutis'] && $norimaSuma['likutis'] > 0 ){
                $sarasas[$index]['likutis'] -= (int)$norimaSuma['likutis'];
            }else{
                $sarasas[$index]['likutis'];
            }
           
        }
    }



    file_put_contents(__DIR__ . '/data.json', json_encode($sarasas));
    // cia: print_r($norimaSuma);

    header("Location: http://localhost/iguanos/bank/list.php");
     die;

}


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
    <div>
        <?php foreach(json_decode(file_get_contents(__DIR__ . '/data.json'),1) as $indexas => $value):?>
        <?php if($indexas == $indexPasirinkto):   ?>

        <?php foreach($value as $index => $duomenys): ?>

        <li><?= $duomenys ?></li>

        <?php endforeach ?>
        <?php endif ?>
        <?php endforeach ?>
    </div>

    <div style="color: white">
        <form method="post">
            Amount:
            <input type="number" name="likutis" required>

            <button type="submit">Credit</button>
        </form>
    </div>
</body>

</html>