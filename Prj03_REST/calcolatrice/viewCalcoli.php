<h1>Risultato</h1>
<pre>

    <?php
session_start();
//print_r($_SESSION);
var_dump($_SESSION);

?>
</pre>


<?php if(isset($_SESSION['risultati'])) : ?>

<h2>addizione: <?= $_SESSION['risultati'][0] ?></h2>
<h2>sottrazione: <?= $_SESSION['risultati'][1] ?></h2>
<h2>moltiplicazione: <?= $_SESSION['risultati'][2] ?></h2>
<h2>divisione: <?= $_SESSION['risultati'][3] ?></h2>

<?php endif; ?>