<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmazione</title>
</head>
<body>

    <h1>Io programmo</h1>
    <?php  echo date("d/m/Y h:i:s"); ?>
    
    <form action="doCalcoli.php" method="post">
        <input type="number" name="operando1" id="op1" placeholder="operando1">
        <input type="number" name="operando2" id="op2" placeholder="operando2">
        <input type="submit" value="calcola">
    </form>



</body>
</html>