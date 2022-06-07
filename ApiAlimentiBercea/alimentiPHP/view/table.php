<h1>Table</h1>
<table class="table table-striped">
<tr>
    <th>Categoria</th>
    <th>Alimento</th>
</tr>

<?php foreach ($alimenti as $alimento):?>
<tr>
    <td><?=$alimento->categoria?></td>
    <td><?=$alimento->prodotto?></td>
</tr>


<?php endforeach;?>
</table>