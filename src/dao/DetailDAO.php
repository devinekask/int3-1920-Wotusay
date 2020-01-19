<?php
require_once( __DIR__ . '/DAO.php');

class DetailDAO extends DAO {

  public function selectById($id){
    $sql = "SELECT * FROM `humo_details` WHERE `humoitem_id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectVersionsById($id) {
    $sql = "SELECT * FROM `humo_versies` WHERE `details_id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}

?>
