<?php
class Contact {
  private $firstName;
  private $lastName;
  private $address;
  private $phoneNumber;


  function __construct($myName, $myAddress, $myPhoneNumber) {
    $this->name = $myName;
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
    return $this->Address;
  }

  function getPhoneNumber() {
    return $this->phoneNumber;
  }


}






 ?>
