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
  $this->set('title', 'Filter');
  $this->set('shopitems', $this->humoDAO->selectAllItems());
}

}
