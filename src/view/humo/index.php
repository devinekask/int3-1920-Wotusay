<article class="longread">
<h1 class="longread__title">Goed boek tip</h1>
<div class="longread__wrapper">
<img src="assets/img/neuromancer.png" alt="neuromancer" width="315" height="473">
<div class="text__wrapper">
<span class="subtitle">roman</span>
<p>Neuromancer is een roman uit 1984. Dit boek heeft namelijk voor het eerst de cyberpunk genre uit heeft gehaalt. Dit boek won een aantal prijzen. Zoals de nebula award en de Hugo award.
</p>
<a class="price__button" href="index.php?page=detail">Bestel | €13,50</a>
</div></div>
<a class="longread__button" href="">Ontdek de longread</a>
</article>
<section class="shop">
<h2 class="hidden">shop</h2>
<nav class="filter">
<ul class="filter-menu">
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=1">Boeken</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=2">Boeken accessoires</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=3">Agenda</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=">HUMO-Abonnement</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=winkelmandje"><svg height="24" viewBox="0 0 32 24" width="32" xmlns="http://www.w3.org/2000/svg"><path d="m1.70573828.00811647c-1.10456948.17673113-1.85673109 1.21543051-1.67999997 2.31999999.17673112 1.10456949 1.21543048 1.85673111 2.31999997 1.68000001h6l.36 1 1.64000002 5.00000003 1.64 5c.16.52.84 1 1.36 1h14c.56 0 1.2-.48 1.36-1l3.24-10.00000003c.16-.52-.08-1-.64-1h-17.76l-1.52-2.88c-.3300771-.67396607-1.0096687-1.10643342-1.76-1.12h-8.00000002c-.11975601-.01082196-.24024399-.01082196-.36 0-.07992787-.00480433-.16007213-.00480433-.24 0zm12.64000002 20.00000003c-1.12 0-2 .88-2 2s.88 2 2 2 2-.88 2-2-.88-2-2-2zm12 0c-1.12 0-2 .88-2 2s.88 2 2 2 2-.88 2-2-.88-2-2-2z" fill="#ee0a0d"/></svg></a></li>

</ul>
</nav>
<div class="container">
<section class="shop-item shop-item__abbo">
<div class="shop__wrapper">
<h3 class="shop-title">PAPIER & DIGITAAL</h3>
<div class="img__wrapper">
<img src="assets/img/papierdigitaal.png" alt="papierdigitaal" width="435" height="372">
<a class="button" href="">BEKIJK HET AANBOD</a></div>
</div>
<div class="information__wrapper">
<ul class="voordelen">
<li class="voordelen-item">Elke dinsdag op papier</li>
<li class="voordelen-item">Altijd toegang</li>
<li class="voordelen-item"><span class="bold">Exclusieve voordelen</span></li>
</ul>
<ul class="prices">
<li class="prices-item prices-item__best">Slechts <span class="bold">€12,76/maand</span> voor <span  class="bold">3 jaar</span></li>
<li class="prices-item">Slechts <span class="bold">€14,36/maand</span> voor <span  class="bold">2 jaar</span></li>
<li class="prices-item">Slechts <span class="bold">€15,96/maand</span> voor <span  class="bold">1 jaar</span></li>
</ul>
</div>
</section>
<div class="line"></div>
<div class="book__wrapper">
<section class="shop-boekenbox shop-item__bookbox">
<h3 class="shop-title shop-title__books">
BOEKENREEKS
</h3>
<img src="assets/img/Boekenreeks.png" alt="boekenreeks" width="397" height="323">
<a href="" class="button" >BEKIJK HET AANBOD</a>
</section>
<section class="shop-boekenreeks shop-item__bookbox">
<h3 class="shop-title shop-title__boekenreeks">Boeken</h3>
<img src="assets/img/books.png" alt="books">
<a href="index.php?page=fil&id=1" class="button">BEKIJK HET AANBOD</a>
</section>
</div>
<div class="line"></div>
<div class="items__wrapper">
<ul class="shop-items">

<?php foreach($shopitems as $shopitem):?>

<li class="shop-item">
<a class="underline__gone" href=""><img src="<?php echo $shopitem['picture']?>" alt="<?php echo $shopitem['name']?>" class="img__shopitem">
<p class="price__button"><?php echo $shopitem['name']?> |
€<?php echo $shopitem['price']?></p></a>
</li>
<?php endforeach;?>
</ul>
</div>
</div>
</section>
