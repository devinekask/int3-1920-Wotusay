<section class="winkelmandje">
<nav class="filter">
<ul class="filter-menu">
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=1">Boeken</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=2">Boeken accessoires</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=fil&id=3">Agenda</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=detail&id=18">HUMO-Abonnement</a></li>
  <li class="filter-item"><a class="filter-link" href="index.php?page=winkelmandje"><svg height="24" viewBox="0 0 32 24" width="32" xmlns="http://www.w3.org/2000/svg"><path d="m1.70573828.00811647c-1.10456948.17673113-1.85673109 1.21543051-1.67999997 2.31999999.17673112 1.10456949 1.21543048 1.85673111 2.31999997 1.68000001h6l.36 1 1.64000002 5.00000003 1.64 5c.16.52.84 1 1.36 1h14c.56 0 1.2-.48 1.36-1l3.24-10.00000003c.16-.52-.08-1-.64-1h-17.76l-1.52-2.88c-.3300771-.67396607-1.0096687-1.10643342-1.76-1.12h-8.00000002c-.11975601-.01082196-.24024399-.01082196-.36 0-.07992787-.00480433-.16007213-.00480433-.24 0zm12.64000002 20.00000003c-1.12 0-2 .88-2 2s.88 2 2 2 2-.88 2-2-.88-2-2-2zm12 0c-1.12 0-2 .88-2 2s.88 2 2 2 2-.88 2-2-.88-2-2-2z" fill="#ee0a0d"/></svg></a></li>

</ul>
</nav>
<div class="container">
  <form action="index.php?page=winkelmandje" method="post" id="cartform">
<div class="title__wrapper">
<h2 class="longread__title">
Winkelmandje
</h2>
<div class="line"></div></div>
<ul class="verzendings">
  <li class="voordeel">Voor 20:00 besteld morgen in huis</li>
  <li class="voordeel">Gratis retourneren binnen de 30 dagen</li>
  <li class="voordeel">Kortingscode achteraan de humo</li>
  <li class="voordeel">Gratis verzending boven de 10,-</li>
</ul>
<div class="line-full"></div>
<?php
          $total = 0;
          $korting = 0;
          foreach($_SESSION['winkelmandje'] as $item) {
            $itemTotal = $item['product']['price'] * $item['quantity'];
            $total += $itemTotal;
            $total -= $korting;
          ?>
<div class="product--info">
<a href="index.php?page=detail&amp;id=<?php echo $item['product']['id'];?>">
  <img src="<?php echo $item['product']['shop'];?>" alt="<?php echo $item['product']['name'];?>" width="117" height="176">
  </a>
  <p class="bold"><?php echo $item['product']['name'];?>
</p>
  <p class="levertijd gone">Op vooraad voor 20:00, morgen in huis</p>
  <div class="aantal__wrapper">
  <label for="aantal">Aantal</label>
  <select name="quantity[<?php echo $item['product']['id'];?>]" id="hoeveelheid">
  <option checked value="<?php echo $item['quantity'];?>"><?php echo $item['quantity'];?></option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="25">25</option>
  </select>
  <button type="submit" id="update-cart" name="remove" value="<?php echo $item['product']['id'];?>" class="delete">Verwijderen</button>
  <button type="submit" name="action" value="update" class="red update">Update</button>
  </form>
</div>
  <span class="bold">€<?php echo money_format("%i", $itemTotal);?></span>
  </form>
</div>
<?php
          }
          ?>
<div class="line-full"></div>
</div>
</section>
<section class="mobile">
  <div class="container">
    <h2 class="hidden">Total price</h2>
    <div class="relevant__wrapper kortings__wrapper">
      <div class="kortin__wrapper">
    <div class="text_wrapper">
      <span>Kortingscode</span>
      <button class="information">?</button></div>
      <form action="index.php?page=winkelmandje" method="post">
      <input type="text" name="code" id="code" class="kortingscode__input">
      <button type="submit" value="<?php  echo $korting = 4.5;?>" name="korting" class="red update">Update</button>
    </form>
    </div>
    <div class="total__wrapper">
      <div class="total-text">
      <p>Totaal artikelen <span class="aantal-mini">(<?php echo $numItems;?>)</span></p>
      <p class="bold"> €<?php echo money_format("%i", $total);?> </p></div>
      <div class="total-text">
      <p>Verzendkosten</p>
      <p class="green">Gratis</p></div>
      <div class="total-text">
      <p>Kortingscode</p>
      <p class="bold">- €<?php echo money_format("%i", $korting); ?></p></div>
      <div class="line-full"></div>
      <div class="total-text">
      <p class="bold">Totaal</p>
      <p class="bold">€<?php echo money_format("%i", $total - $korting);?> </p></div>
      <form action="index.php?page=kassa" method="post" id="cartform">

      <button class="submit-total" type="submit" name="action" value="checkout" > Verder naar bestelling </button>
        </form>
      </div>

    </div>
    </div>
    </div>
    <div class="container align-right">
    <img class="payment" src="assets/img/payment.png" alt="payment"></div>
  </div>
</section>
