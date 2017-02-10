<?php
class Contact {
  private $firstName;
  private $lastName;
  private $address;
  private $phoneNumber;


  function __construct($myFirstName, $myLastName, $myAddress, $myPhoneNumber) {
    $this->firstName = $myFirstName;
    $this->lastName = $myLastName;
    $this->address = $myAddress;
    $this->phoneNumber = $myPhoneNumber;
  }

  function setFirstName($myFirstName) {
    $this->firstName = $myFirstName;
  }

  function setLastName($myLastName) {
    $this->lastName = $myLastName;
  }

  function setAddress($myAddress) {
    $this->address = $myAddress;
  }

  function setPhoneNumber($myPhoneNumber) {
    $this->phoneNumber = $myPhoneNumber;
  }

  function getFirstName() {
    return $this->firstName;
  }

  function getLastName() {
    return $this->lastName;
  }

  function getAddress() {
    return $this->address;
  }

  function getPhoneNumber() {
    return $this->phoneNumber;
  }

  function save() {
    array_push($_SESSION['address_book'], $this);
  }

  static function getAll() {
    return $_SESSION['address_book'];
  }

  static function clearAddressBook() {
    $_SESSION['address_book'] = array();
  }


}






 ?>
