<?php require '../controller/studentiCtrl.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elenco studenti</h1>
    
    <form method="post" action="">

        <table>
            <tr>
            <th>Nome</th>
            <th>Cognome</th>
        </tr>
        
        <?php foreach ($arrayStudenti as $studente) { ?>
            
            <tr>
                <td><input type="text" name="nome[]" value="<?= $studente->nome ?>"></td>
                <td><input type="text" name="cognome[]" value="<?= $studente->cognome ?>"></td>
                <td><input type="text" name="posizione[]"></td>
            </tr>
            
            <?php } ?>
            
            
        </table>
        <input type="submit" value="registra">
    </form>
        
</body>
</html>

