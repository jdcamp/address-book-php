<?php
class Contact {
  private $firstName;
  private $lastName;
  private $address;
  private $phoneNumber;
  private $imageURL;



  function __construct($myFirstName, $myLastName, $myAddress, $myPhoneNumber, $myImage) {
    $this->firstName = $myFirstName;
    $this->lastName = $myLastName;
    $this->address = $myAddress;
    $this->phoneNumber = $myPhoneNumber;
    $this->imageURL = $myImage;
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
  function setImage($myImage) {
    $this->imageURL = $myImage;
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
  function getImage() {
    return $this->imageURL;
  }

  function save() {
    array_push($_SESSION['list_of_contacts'], $this);
  }

  static function getAll() {
    return $_SESSION['list_of_contacts'];
  }

  static function clearAddressBook() {
    $_SESSION['list_of_contacts'] = array();
  }


}






 ?>
