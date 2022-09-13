<?php
class PaymentMethod
{
  protected $number;
  protected $balance;
  protected $expiration_date;

  public function __construct($number, $balance)
  {
    $this->setNumber($number);
    $this->setBalance($balance);
  }

  private function setNumber($number)
  {
    if(!is_numeric($number)) return;
    $this->number = $number;
    $this->setExpirationDate(); //al momento di registrazione della carta, ottengo la data di scadenza
    return $this;
  }

  private function setExpirationDate()
  {
    $expiration_date = date('Y-m-d', strtotime(' + 8 years'));
    $this->expiration_date = $expiration_date;
    return $this;
  }

  public function getExpirationDate()
  {
    return $this->expiration_date;
  }

  public function getNumber()
  {
    return $this->number;
  }

  private function setBalance($balance)
  {
    $this->balance = $balance;
    return $this;
  }

  public function getBalance()
  {
    return $this->balance;
  }


  public function checkPayment($amount)
  {
    $current_date = date('Y-m-d');
    if(!is_numeric($amount) || $amount < 0 || $this->balance < $amount || $current_date > $this->expiration_date) return false;

    $this->balance -= $amount;
    return true;
  }

}