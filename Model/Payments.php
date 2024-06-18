<?php

class Payments {
    public $payment_id;
    public $payment_type;
    public $payment_date;
    public $payment_note;

    /**
     * @param $payment_id
     * @param $payment_type
     * @param $payment_date
     * @param $payment_note
     */
    public function __construct($payment_id, $payment_type, $payment_date, $payment_note)
    {
        $this->payment_id = $payment_id;
        $this->payment_type = $payment_type;
        $this->payment_date = $payment_date;
        $this->payment_note = $payment_note;
    }

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }

    /**
     * @param mixed $payment_id
     */
    public function setPaymentId($payment_id)
    {
        $this->payment_id = $payment_id;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * @param mixed $payment_type
     */
    public function setPaymentType($payment_type)
    {
        $this->payment_type = $payment_type;
    }

    /**
     * @return mixed
     */
    public function getPaymentDate()
    {
        return $this->payment_date;
    }

    /**
     * @param mixed $payment_date
     */
    public function setPaymentDate($payment_date)
    {
        $this->payment_date = $payment_date;
    }

    /**
     * @return mixed
     */
    public function getPaymentNote()
    {
        return $this->payment_note;
    }

    /**
     * @param mixed $payment_note
     */
    public function setPaymentNote($payment_note)
    {
        $this->payment_note = $payment_note;
    }
}

?>