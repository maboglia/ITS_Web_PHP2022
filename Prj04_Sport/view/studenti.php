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

    <table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
        </tr>

        <?php foreach ($arrayStudenti as $studente) {?>
            
            <tr>
                <td><?= $studente->nome ?></td>
                <td><?= $studente->cognome ?></td>
            </tr>

        <?php } ?>


    </table>


</body>
</html>

