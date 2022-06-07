<h1>Detail</h1>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$alimento->prodotto?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$alimento->categoria?></h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link"><?=$alimento->energia?></a>
    <a href="?cat=<?=$alimento->categoria?>" class="card-link"><?=$alimento->categoria?></a>
  </div>
</div>