<?php session_start() ?>

<?php include 'header.php';  ?>




<h1>Pizzeria</h1>

<?php include 'menu_pizze.php';  ?>

<ul class="list-group">

<?php foreach ($pizze as $oggetto_pizza) : ?>
        <li class="list-group-item">
            <a href="ordina_pizza.php?codPizza=<?=$oggetto_pizza->codPizza?>"><?=$oggetto_pizza?></a> 
           
        
        </li>
<?php endforeach; ?>

</ul>

<h2>Ordini</h2>
<pre>
<?php 
//print_r($_SESSION['ordini']);

$totaleOrdine = 0;

if (isset($_SESSION['ordini'])){

    
    foreach ($_SESSION['ordini'] as $ordine) {
        $pizzaCorrente = unserialize($ordine);
        echo $pizzaCorrente . "<br>";
        $totaleOrdine += $pizzaCorrente->prezzo;
    }
    
    
}
?>
</pre>

<h2>Totale ordine <?= $totaleOrdine ?></h2>
<button class="btn btn-primary" id="paga">Paga</button>

<?php include 'footer.php';  ?>