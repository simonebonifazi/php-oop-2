<?php
class PaymentMethod
{
  protected $card_number;
  protected $balance;
  protected $expiration_date;

  public function __construct($card_number, $balance)
  {
    $this->setCardNumber($card_number);
    $this->setBalance($balance);
  }

  private function setCardNumber($card_number)
  {
    if(!is_numeric($card_number) && strlen($card_number) != 16) return;
    $this->card_number = $card_number;
    $this->setExpirationDate(); //al momento di registrazione della carta, ottengo la data di scadenza
    return $this;
  }

  private function setExpirationDate()
  {
    $expiration_date = date('d-m-Y', strtotime(' + 8 years'));
    $this->expiration_date = $expiration_date;
    return $this;
  }

  public function getExpirationDate()
  {
    return $this->expiration_date;
  }

  public function getCardNumber()
  {
    return $this->card_number;
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
    $current_date = date('d-m-Y');
    if(!is_numeric($amount) || $amount < 0 || $this->balance < $amount || $current_date > $this->expiration_date) return false;

    $this->balance -= $amount;
    return true;
  }

}