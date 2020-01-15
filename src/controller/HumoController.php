<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/HumoDAO.php';

class HumoController extends Controller {

  private $humoDAO;

  function __construct() {
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
}

}
