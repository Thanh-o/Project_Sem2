<?php

class OrderDetails {
    public $order_id;
    public $product_id;
    public $quantity;

    /**
     * @param $order_id
     * @param $product_id
     * @param $quantity
     * @param $total
     * @param $order_detail_date
     */
    public function __construct($order_id, $product_id, $quantity, $total, $order_detail_date)
    {
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->total = $total;
        $this->order_detail_date = $order_detail_date;
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
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getOrderDetailDate()
    {
        return $this->order_detail_date;
    }

    /**
     * @param mixed $order_detail_date
     */
    public function setOrderDetailDate($order_detail_date)
    {
        $this->order_detail_date = $order_detail_date;
    }
    public $total;
    public $order_detail_date;
}

?>