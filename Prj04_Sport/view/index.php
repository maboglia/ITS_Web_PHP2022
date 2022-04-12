<?php require '../controller/sportCtrl.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport</title>
</head>
<body>
    
    <h1>Sport</h1>

    <form action="" method="post">
        <p>
            <label for="nome">Nome sport</label>
            <input type="text" name="nome" id="nome"> 
        </p>
        <p>
            <label for="tipo">Tipo sport</label>
            <input type="text" name="tipo" id="tipo"> 
        </p>
        <p>
            <input type="submit" value="Add sport">
        </p>
    </form>

    <table>

        <tr>
            <th>Nome</th>
            <th>Tipo</th>
        </tr>

        <?php foreach ($_SESSION['sports'] as $sport) { ?>
            <tr>
                <td><?= $sport->nome ?></td>
                <td><?= $sport->tipo ?></td>
            </tr>            
        <?php } ?>


    </table>

</body>
</html>