<section>
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
<div class="title__wrapper">
<h2 class="longread__title">
<?php if($_GET['id'] == '1') { echo 'Boeken' ?>
<?php } elseif($_GET['id'] == '2') { echo 'Boeken Accessoires' ?> <?php } elseif($_GET['id'] == '3') { echo 'Agenda'?> <?php } ?>
</h2>
<div class="line"></div></div>
<?php if($_GET['id'] == '1') {  ?>
<a href="" class="underline__gone"><div class="boekenreeks__wrapper">
<img src="assets/img/Boekenreeks-fullshadow.png" alt="boekenreeks"></div>
<p class="price__button">Boekenreeks | €48,50</p>
</a>

<div class="line"></div> <?php } ?>
<div class="items__wrapper">
<ul class="shop-items">

<?php foreach($shopitems as $shopitem):?>

<li class="shop-item">
<a class="underline__gone" href=""><img class="img__shopitem" src="<?php echo $shopitem['picture']?>" alt="<?php echo $shopitem['name']?>" width="254" height="229">
<p class="price__button"><?php echo $shopitem['name']?> |
€<?php echo $shopitem['price']?></p></a>
</li>
<?php endforeach;?>
</ul>
</div>
</div>
</section>
