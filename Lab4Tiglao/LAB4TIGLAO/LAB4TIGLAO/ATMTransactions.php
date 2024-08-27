<?php

class ATMTransactions {
    private $transactionID;
    private $date;
    private $type;
    private $amount;
    private $postBalance;

    public function modifies() {
        return false;
    }
}
