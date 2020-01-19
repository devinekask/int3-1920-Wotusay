<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/HumoDAO.php';
require_once __DIR__ . '/../dao/DetailDAO.php';

class HumoController extends Controller {

  private $detailDAO;
  private $humoDAO;

  function __construct() {
    $this->detailDAO = new DetailDAO();
    $this->humoDAO = new HumoDAO();
  }

  public function index() {
  $this->set('shopitems', $this->humoDAO->selectAllItems());
  $this->set('title', 'Shop');
}
  public function fil() {
  if(!empty($_GET['id'])){
    $products = $this->humoDAO->selectByFilter($_GET['id']);
  } else {
    $products = $this->humoDAO->selectAllItems();
  }

  $this->set('shopitems', $products);
  $this->set('title', 'Filter');
  }
  public function detail() {
   $this->set('title', 'Productinfo');
    if(!empty($_GET['id'])) {
      $product = $this->detailDAO->selectById($_GET['id']);
      $item = $this->humoDAO->selectById($_GET['id']);
      $relevantfirst = $this->humoDAO->selectById($_GET['id'] + 1);
      $relevantsecond = $this->humoDAO->selectById($_GET['id'] - 1);
      $relevantthrid = $this->humoDAO->selectById($_GET['id'] + 2);
      $relevantfourth = $this->humoDAO->selectById($_GET['id'] + 3);
      $relevantfifth = $this->humoDAO->selectById($_GET['id'] - 2);
      $relevantsixd = $this->humoDAO->selectById($_GET['id'] - 3);
      $versions = $this->detailDAO->selectVersionsById($_GET['id']);


    } if (empty($product)){
      $_SESSION['error'] = 'Het product werd niet gevonden';
      header('Location:index.php');
      exit();
    }
    $this->set('relevant1', $relevantfirst);
    $this->set('relevant2', $relevantsecond);
    $this->set('relevant3', $relevantthrid);
    $this->set('relevant4', $relevantfourth);
    $this->set('relevant5', $relevantfifth);
    $this->set('relevant6', $relevantsixd);
    $this->set('version', $versions);
    $this->set('item', $item);
    $this->set('product', $product);
  }

  public function winkelmandje() {
    $this->set('title', 'Winkelmandje');
  }

  public function kassa() {
    $this->set('title', 'Kassa');
  }

  public function kassastep2() {
    $this->set('title', 'Kassa');
  }

  public function kassastep3() {
    $this->set('title', 'Kassa');
  }

  public function overview() {
    $this->set('title', 'Kassa');
  }

  public function confermation() {
    $this->set('title', 'Kassa');
  }
}
