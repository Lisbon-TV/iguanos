<?php
$erroras='';
$sarasas = json_decode(file_get_contents(__DIR__ . '/data.json', 1));

if('POST' == $_SERVER['REQUEST_METHOD'] ){
    $sutampa = 0;
    $ra = $_POST ?? 'Nieko nera';

 
    if(isset($_POST['vardas']) &&  strlen($_POST['vardas'])>3){
        if(isset($_POST['pavarde']) &&  strlen($_POST['pavarde'])>3){
            if(isset($_POST['asmensKodas']) &&  preg_match("/^[3-9][0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[0-9]{4}$/", $_POST['asmensKodas'])){
                foreach($sarasas as $objektas){
                    if($_POST['asmensKodas'] == $objektas->asmensKodas){
                        $sutampa = 1;
                        $erroras='The personal code entered does not exist!'; 
                    
                    }
                }
                    if($sutampa == 0){
                        if(!file_exists(__DIR__ . '/data.json')){
                            file_put_contents(__DIR__ . '/data.json', json_encode([]));
                        }
                
                        $data =json_decode(file_get_contents(__DIR__ . '/data.json', 1));
                    
                        $data[] = $ra;
                        
                        $erroras='';
            
                        file_put_contents(__DIR__ . '/data.json', json_encode($data));
                    
                        header("Location: http://localhost/iguanos/bank/index.php");
                        die;
                    }
        }

        }

    } 
        $erroras='Wrong credentials!';  
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
    <?php include   'header.php' ?>
    <div style="display: flex; flex-direction: column; flex-wrap: wrap; height: 30px">
        <form action="http://localhost/iguanos/bank/index.php" method="post">
            Name:<input type="text" name="vardas" required>
            Surname:<input type="text" name="pavarde" required>
            Personal code:<input type="number" name="asmensKodas" min="10000000000" max="99999999999" required>
            Your IBAN:<input type="text" name="saskaitosNumeris"
                value="LT<?= rand(100000000000000000, 999999999999999999) ?>" readonly>
            <input type="text" name="likutis" value="0" readonly hidden>
            <button type="submit">Create new account</button>
        </form>
    </div>
    <div style="background: blue">
        <h3><?= $erroras ?></h3>
    </div>
</body>

</html>