<?php

require_once( __DIR__ . '/DAO.php');

class HumoDAO extends DAO {
  public function selectAllItems() {
    $sql = 'SELECT * FROM `humo_items`';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById() {
    $sql = "SELECT * FROM `humo_items` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectByFilter($id) {
    $sql = "SELECT * FROM `humo_items` WHERE `filter` = :filter";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':filter', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
?>
