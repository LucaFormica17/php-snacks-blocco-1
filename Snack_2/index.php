<?php 
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    $name_len = strlen($name);

    $message = '';
    
    if($name_len > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($age)){
         $message = 'Accesso riuscito';
    } else{
        $message = "Accesso negato";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="./index.php" method="get">
            <input type="text" name="name" placeholder="Nome" id="nome">
            <input type="text" name="email" placeholder="Email" id="mail">
            <input type="text" name="age" placeholder="Età" id="eta">
            <button type="submit">invia</button>
            <p>
                <?php echo $message ?>
            </p>
        </form>
    </body>
</html>