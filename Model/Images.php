<?php

class Images {
    public $image_id;
    public $product_id;
    public $image_url;
    public $image_description;

    /**
     * @param $image_id
     * @param $product_id
     * @param $image_url
     * @param $image_description
     */
    public function __construct($image_id, $product_id, $image_url, $image_description)
    {
        $this->image_id = $image_id;
        $this->product_id = $product_id;
        $this->image_url = $image_url;
        $this->image_description = $image_description;
    }

    /**
     * @return mixed
     */
    public function getImageDescription()
    {
        return $this->image_description;
    }

    /**
     * @param mixed $image_description
     */
    public function setImageDescription($image_description)
    {
        $this->image_description = $image_description;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * @param mixed $image_url
     */
    public function setImageUrl($image_url)
    {
        $this->image_url = $image_url;
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
    public function getImageId()
    {
        return $this->image_id;
    }

    /**
     * @param mixed $image_id
     */
    public function setImageId($image_id)
    {
        $this->image_id = $image_id;
    }
}

?>