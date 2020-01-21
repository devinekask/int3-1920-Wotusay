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
  if(isset($_POST['action'])){
    if($_POST['action'] == 'insert'){
      if($this->humoDAO->insertGuest($_POST)){
      unset($_POST);
      header('Location: index.php?page=kassastep3');
      exit();
      }
    }
  }
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
    $numItems = 0;
    if (empty($_SESSION['winkelmandje'])){
      $_SESSION['winkelmandje'] = array();
    } else {
    foreach ($_SESSION['winkelmandje'] as $productId => $info) {
      $numItems += $info['quantity'];
    } }
    $this->set('numItems', $numItems);
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'add') {
        $this->_handleAdd();
        header('Location: index.php?page=detail&id=' . $_POST['product_id']);
        exit();
      }
      if ($_POST['action'] == 'empty') {
        $_SESSION['winkelmandje'] = array();
      }
      if ($_POST['action'] == 'update') {
        $this->_handleUpdate();
      }
      if ($_POST['action'] == 'checkout') {
        $this->_handleCheckout();
      }
      header('Location: index.php?page=winkelmandje');
      exit();
    }
    if (!empty($_POST['remove'])) {
      $this->_handleRemove();
      header('Location: index.php?page=winkelmandje');
      exit();
    }

    $this->set('title', 'Winkelmandje');
  }


  private function _handleCheckout() {
    header('Location: index.php?page=kassa');
    exit();
  }

  private function _handleCheckoutOverview() {
    $_SESSION['winkelmandje'] = array();
    header('Location: index.php?page=confermation');
    exit();
  }

  private function _handleAdd() {
    if (empty($_SESSION['winkelmandje'][$_POST['product_id']])) {
      $product = $this->humoDAO->selectById($_POST['product_id']);
      if (empty($product)) {
        return;
      }
      $_SESSION['winkelmandje'][$_POST['product_id']] = array(
        'product' => $product,
        'quantity' => 0
      );
    }
    $_SESSION['winkelmandje'][$_POST['product_id']]['quantity']++;
  }

  private function _handleRemove() {
    if (isset($_SESSION['winkelmandje'][$_POST['remove']])) {
      unset($_SESSION['winkelmandje'][$_POST['remove']]);
    }
  }

  private function _handleUpdate() {
    foreach ($_POST['quantity'] as $productId => $quantity) {
      if (!empty($_SESSION['winkelmandje'][$productId])) {
        $_SESSION['winkelmandje'][$productId]['quantity'] = $quantity;
      }
    }
    $this->_removeWhereQuantityIsZero();
  }

  private function _removeWhereQuantityIsZero() {
    foreach($_SESSION['winkelmandje'] as $productId => $info) {
      if ($info['quantity'] <= 0) {
        unset($_SESSION['winkelmandje'][$productId]);
      }
    }
  }

  public function kassa() {
    $this->set('title', 'Kassa');
  }

  public function kassastep2() {
    if(isset($_POST['action'])){
      if($_POST['action'] == 'insert'){
        if($this->humoDAO->insertGuest($_POST)){
        unset($_POST);
        header('Location: index.php?page=kassastep3');
        exit();
        }
      }
    }

    $this->set('title', 'Kassa');
  }

  public function kassastep3() {
    if(isset($_POST['action'])){
      if($_POST['action'] == 'insert'){
        if($this->humoDAO->insertGuest($_POST)){
        unset($_POST);
        header('Location: index.php?page=kassastep3');
        exit();
        }
      }
    }
    $this->set('title', 'Kassa');
  }

  public function overview() {
    $numItems = 0;
    if (empty($_SESSION['winkelmandje'])){
      $_SESSION['winkelmandje'] = array();
    } else {
    foreach ($_SESSION['winkelmandje'] as $productId => $info) {
      $numItems += $info['quantity'];
    } }
    $this->set('numItems', $numItems);
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'add') {
        $this->_handleAdd();
        header('Location: index.php?page=detail&id=' . $_POST['product_id']);
        exit();
      }
      if ($_POST['action'] == 'empty') {
        $_SESSION['winkelmandje'] = array();
      }
      if ($_POST['action'] == 'checkout') {
        $this->_handleCheckoutOverview();
      }
      header('Location: index.php?page=confermation');
      exit();
    };
    if(!empty($this->humoDAO->selectByMostRecent())){
      $guest = $this->humoDAO->selectByMostRecent();
    } else {
      header('Location: index.php?page=kassastep2');
    }
    $this->set('guest', $guest);
    $this->set('title', 'Kassa');
  }

  public function confermation() {
    $this->set('title', 'Kassa');
  }
}
