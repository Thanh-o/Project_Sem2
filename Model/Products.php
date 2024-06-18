<?php

class Products {
    public $product_id;
    public $product_name;
    public $product_price;
    public $product_description;
    public $product_quantity;

    /**
     * @param $product_id
     * @param $product_name
     * @param $product_price
     * @param $product_description
     * @param $product_quantity
     */
    public function __construct($product_id, $product_name, $product_price, $product_description, $product_quantity)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_description = $product_description;
        $this->product_quantity = $product_quantity;
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
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->product_price;
    }

    /**
     * @param mixed $product_price
     */
    public function setProductPrice($product_price)
    {
        $this->product_price = $product_price;
    }

    /**
     * @return mixed
     */
    public function getProductDescription()
    {
        return $this->product_description;
    }

    /**
     * @param mixed $product_description
     */
    public function setProductDescription($product_description)
    {
        $this->product_description = $product_description;
    }

    /**
     * @return mixed
     */
    public function getProductQuantity()
    {
        return $this->product_quantity;
    }

    /**
     * @param mixed $product_quantity
     */
    public function setProductQuantity($product_quantity)
    {
        $this->product_quantity = $product_quantity;
    }


}

?>