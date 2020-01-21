<?php

require_once( __DIR__ . '/DAO.php');

class HumoDAO extends DAO {
  public function selectAllItems() {
    $sql = 'SELECT * FROM `humo_items` WHERE `id` < 18';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id) {
    $sql = "SELECT * FROM `humo_items` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectByFilter($id) {
    $sql = "SELECT * FROM `humo_items` WHERE `filter` = :filter AND `id` < 18";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':filter', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }



  public function selectByMostRecent() {
    $sql = "SELECT * FROM `humo_guest` ORDER BY `Datecreated` DESC";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function insertGuest($data) {
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `humo_guest` (`voornaam`, `aanspreking`, `achternaam`, `straatnaam`, `huisnummer`, `busnr`, `postcode`, `woonplaats`, `email`, `telefoonumber`)
      VALUES (:voornaam, :aanspreking, :achternaam, :straatnaam, :huisnummer, :busnr, :postcode, :woonplaats, :email, :telefoonumber)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':voornaam', $data['voornaam']);
      $stmt->bindValue(':aanspreking', $data['aanspreking']);
      $stmt->bindValue(':achternaam',  $data['achternaam']);
      $stmt->bindValue(':straatnaam', $data['straatnaam']);
      $stmt->bindValue(':huisnummer', $data['huisnummer']);
      $stmt->bindValue(':busnr', $data['busnr']);
      $stmt->bindValue(':postcode', $data['postcode']);
      $stmt->bindValue(':woonplaats', $data['woonplaats']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':telefoonumber', $data['telefoonumber']);
      if ($stmt->execute()) {
        return true;
      }
    }
    $_SESSION['errors'] = $errors;
    return false;
  }


  public function validate( $data ){
    $errors = [];
    if (empty($data['voornaam'])) {
      $errors['voornaam'] = 'Gelieve je voornaam mee tegeven';
    }
    if (empty($data['achternaam'])) {
      $errors['achternaam'] = 'Gelieve je achternaam mee tegeven';
    }
    if (empty($data['straatnaam']) ){
      $errors['straatnaam'] = 'Gelieve je straatnaam mee tegeven';
    }
    if (empty($data['huisnummer']) ){
      $errors['huisnummer'] = 'Gelieve je huisnummer mee tegeven';
    }
    if (empty($data['postcode']) ){
      $errors['postcode'] = 'Gelieve je postcode mee tegeven';
    }
    if (empty($data['woonplaats']) ){
      $errors['woonplaats'] = 'Gelieve je gemeente mee tegeven';
    }
    if (empty($data['email']) ){
      $errors['email'] = 'Gelieve je email mee tegeven';
    }
    if (empty($data['telefoonumber']) ){
      $errors['telefoonumber'] = 'Gelieve je telefoonummer mee tegeven';
    }
    return $errors;
  }

}
?>
