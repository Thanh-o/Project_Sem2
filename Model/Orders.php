<?php

class Orders {
    public $order_id;
    public $employee_id;
    public $customer_id;
    public $order_date;

    /**
     * @param $order_id
     * @param $employee_id
     * @param $customer_id
     * @param $order_date
     * @param $order_status
     * @param $payment_id
     * @param $updated_date
     */
    public function __construct($order_id, $employee_id, $customer_id, $order_date, $order_status, $payment_id, $updated_date)
    {
        $this->order_id = $order_id;
        $this->employee_id = $employee_id;
        $this->customer_id = $customer_id;
        $this->order_date = $order_date;
        $this->order_status = $order_status;
        $this->payment_id = $payment_id;
        $this->updated_date = $updated_date;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }

    /**
     * @param mixed $employee_id
     */
    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param mixed $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * @param mixed $order_date
     */
    public function setOrderDate($order_date)
    {
        $this->order_date = $order_date;
    }

    /**
     * @return mixed
     */
    public function getOrderStatus()
    {
        return $this->order_status;
    }

    /**
     * @param mixed $order_status
     */
    public function setOrderStatus($order_status)
    {
        $this->order_status = $order_status;
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
    public function getUpdatedDate()
    {
        return $this->updated_date;
    }

    /**
     * @param mixed $updated_date
     */
    public function setUpdatedDate($updated_date)
    {
        $this->updated_date = $updated_date;
    }
    public $order_status;
    public $payment_id;
    public $updated_date;
}

?>