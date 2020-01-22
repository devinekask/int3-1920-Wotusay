<section class="detail">
<nav class="filter">
<ul class="filter-menu">
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=1">Boeken</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=2">Boeken accessoires</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=3">Agenda</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=detail&id=18">HUMO-Abonnement</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=winkelmandje"><svg height="24" viewBox="0 0 32 24" width="32" xmlns="http://www.w3.org/2000/svg"><path d="m1.70573828.00811647c-1.10456948.17673113-1.85673109 1.21543051-1.67999997 2.31999999.17673112 1.10456949 1.21543048 1.85673111 2.31999997 1.68000001h6l.36 1 1.64000002 5.00000003 1.64 5c.16.52.84 1 1.36 1h14c.56 0 1.2-.48 1.36-1l3.24-10.00000003c.16-.52-.08-1-.64-1h-17.76l-1.52-2.88c-.3300771-.67396607-1.0096687-1.10643342-1.76-1.12h-8.00000002c-.11975601-.01082196-.24024399-.01082196-.36 0-.07992787-.00480433-.16007213-.00480433-.24 0zm12.64000002 20.00000003c-1.12 0-2 .88-2 2s.88 2 2 2 2-.88 2-2-.88-2-2-2zm12 0c-1.12 0-2 .88-2 2s.88 2 2 2 2-.88 2-2-.88-2-2-2z" fill="#ee0a0d"/></svg></a></li>
</ul>
</nav>
<a class="price__button" href="<?php if($item['id'] === 18) {?> index.php <?php } if($item['id'] < 41 && $item['id'] > 30)  { ?> index.php?page=fil&id=1 <?php } else{ ?>index.php?page=fil&id=<?php echo $item['filter']; } ?> ">Terug</a>
<h2 class="detail__title"><?php echo $item['name'] ?></h2>
<div class="item__wrapper">
<div class="img__wrapper">
<?php if($item['id'] === 1) { ?>
<span class="tip">Goed boek</span>
<?php }?>
<img src="<?php echo $product['picturedetail'] ?>" class="js-picture" alt="<?php echo $item['name'];?>" witdh="357" height="538">
</div>
<form action="index.php?page=winkelmandje" method="post">
<div class="productinformation__wrapper">
<div class="flex__wrapper">
<?php if ( $item['id'] === 12 ||  $item['id'] === 10 ||  $item['id']  < 18 && $item['filter'] === 1 || $item['id'] < 41 && $item['filter'] === 4 || $item['filter'] === 0) {?>
<span class="red-text">Kies je versie</span>
<select class="js-option" name="versie" id="versie">
<?php if ($item['id'] < 41 && $item['filter'] === 4) {  ?>
  <option checked value="<?php echo $version['optie 2'] ?>"><?php echo $version['optie 2'] ?></option>
  <option checked value="<?php echo $version['optie 1'] ?>"><?php echo $version['optie 1'] ?></option>
<?php } else { ?>
<option checked value="<?php echo $version['optie 1'] ?>"><?php echo $version['optie 1'] ?></option>
<option value="<?php echo $version['optie 2'] ?>"><?php echo $version['optie 2'] ?></option>
<?php if ($version['optie 3'] === "-" &&  $version['optie 4'] === "-"){} else { ?>
<option value="<?php echo $version['optie 3'] ?>"><?php echo $version['optie 3'] ?></option>
<?php if ($version['optie 4'] === "-"){} else { ?>
<option value="<?php echo $version['optie 4'] ?>"><?php echo $version['optie 4'] ?></option>
<?php } ?>
<?php } ?>
<?php }?>

</select>
<?php } elseif ($item['id'] === 19) {} ?>
</div>
<div class="flex__wrapper">
<span class="price-books-js bold">€<?php echo money_format("%i", $item['price']); if($item['id'] === 18) { ?> /maand <?php }?> </span>
<span class="vooraad">Op vooraad</span>
</div>
<input type="hidden" class="hidden-js" name="product_id" value="<?php echo $item['id'];?>">
<button type="submit" name="action" value="add" class="button__bestel">Bestel</button>
<p class="service">Voor 20:00 besteld <span class="red">morgen</span> in huis</p>
<p class="service"><span class="red">Gratis retourneren </span> binnen de 30 dagen</p>
<p class="service"><span class="red">Kortingscode</span> voor humo werkt hier</p>
</div>
<?php if($item['id'] === 1) { ?>
<div class="longread__information">
<span class="genre">roman</span>
<p class="desc">Neuromancer is een roman uit 1984. Dit boek heeft namelijk voor het eerst de cyberpunk genre uit heeft gehaalt. Dit boek won een aantal prijzen. Zoals de nebula award en de Hugo award.</p>
<a class="longread__information--link" href="">Ontdek de longread</a>
</div>
<?php }?>
</div>
</form>
<?php if($item['id'] === 1) { ?>
<div class="picture__wrapper">
<input checked value="1" class="js-radio" type="radio" name="pictures" id="front">
<label class="front" for="front"></label>
<input value="2" class="js-radio" type="radio" name="pictures" id="back">
<label  class="back" for="back"></label>
</div>
<?php }?>
</form>
<div class="specific__information">
<p class="first"><span class="bold">Title: </span>
<?php echo $product['title'] ?>
</p>
<p><span class="bold">Type: </span>
<?php echo $product['type'] ?>
</p>
<p><span class="bold">Uitgekomen: </span><?php echo $product['uitgekomen'] ?>
</p>
<p><span class="bold">Samenvatting: </span>
<?php echo $product['samenvatting'] ?>
</p>
</div>
</section><?php if($item['id'] === 18){} else{ ?>
<section class="relevant__wrapper">
<div class="container">
<div class="line"></div>
<h2 class="relevante__title">Relevante Producten</h2>
<div class="relevant__products">

<?php if($item['id'] === 17 ||  $item['id'] === 19) {?>
    <a href="index.php?page=detail&id=<?php echo $relevant5['id'] ?>" class="underline__gone">
  <img src="<?php echo $relevant5['picture'] ?>" alt="<?php echo $relevant5['name'] ?>" width="209" height="188">
  <p class="price__button"><?php echo $relevant5['name'] ?> | €<?php echo $relevant5['price'] ?></p>
</a>
    <?php } else {?>
<a href="index.php?page=detail&id=<?php echo $relevant1['id'] ?>" class="underline__gone">
  <img src="<?php echo $relevant1['picture'] ?>" alt="<?php echo $relevant1['name'] ?>" srcset="" width="209" height="188">
  <p class="price__button"><?php echo $relevant1['name'] ?>| €<?php echo $relevant1['price'] ?></p>
</a>
  <?php } if($item['id'] === 1) { ?>
  <a href="index.php?page=detail&id=<?php echo $relevant4['id'] ?>" class="underline__gone">
  <img src="<?php echo $relevant4['picture'] ?>" alt="<?php echo $relevant4['name'] ?>" width="209" height="188">
  <p class="price__button"><?php echo $relevant4['name'] ?> | €<?php echo $relevant4['price'] ?></p>
</a>
  <?php } else {?>
<a href="index.php?page=detail&id=<?php echo $relevant2['id'] ?>" class="underline__gone">
  <img src="<?php echo $relevant2['picture'] ?>" alt="<?php echo $relevant2['name'] ?>" width="209" height="188">
  <p class="price__button"><?php echo $relevant2['name'] ?> | €<?php echo $relevant2['price'] ?></p>
</a>
  <?php } if($item['id'] === 17 || $item['id'] === 19) {?>
    <a href="index.php?page=detail&id=<?php echo $relevant6['id'] ?>" class="underline__gone gone">
  <img src="<?php echo $relevant6['picture'] ?>" alt="<?php echo $relevant6['name'] ?>" width="209" height="188">
  <p class="price__button"><?php echo $relevant6['name'] ?> | €<?php echo $relevant6['price'] ?></p>
</a>
    <?php } else {?>
<a href="index.php?page=detail&id=<?php echo $relevant3['id'] ?>" class="underline__gone gone">
  <img src="<?php echo $relevant3['picture'] ?>" alt="<?php echo $relevant3['name'] ?>" width="209" height="188">
  <p class="price__button"><?php echo $relevant3['name'] ?> | €<?php echo $relevant3['price'] ?></p>
</a>
    <?php } ?>
</div>
<div class="line"></div>
</div>

</section>
<?php } ?>
