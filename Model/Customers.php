<?php

class Customers {
    public $customer_id;
    public $customer_type;
    public $customer_name;
    public $customer_username;
    public $customer_password;
    public $customer_email;
    public $customer_phone;
    public $customer_account_status;
    public $employee_id;

    /**
     * @param $customer_id
     * @param $customer_type
     * @param $customer_name
     * @param $customer_username
     * @param $customer_password
     * @param $customer_email
     * @param $customer_phone
     * @param $customer_account_status
     * @param $employee_id
     */
    public function __construct($customer_id, $customer_type, $customer_name, $customer_username, $customer_password, $customer_email, $customer_phone, $customer_account_status, $employee_id)
    {
        $this->customer_id = $customer_id;
        $this->customer_type = $customer_type;
        $this->customer_name = $customer_name;
        $this->customer_username = $customer_username;
        $this->customer_password = $customer_password;
        $this->customer_email = $customer_email;
        $this->customer_phone = $customer_phone;
        $this->customer_account_status = $customer_account_status;
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
    public function getCustomerType()
    {
        return $this->customer_type;
    }

    /**
     * @param mixed $customer_type
     */
    public function setCustomerType($customer_type)
    {
        $this->customer_type = $customer_type;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }

    /**
     * @param mixed $customer_name
     */
    public function setCustomerName($customer_name)
    {
        $this->customer_name = $customer_name;
    }

    /**
     * @return mixed
     */
    public function getCustomerUsername()
    {
        return $this->customer_username;
    }

    /**
     * @param mixed $customer_username
     */
    public function setCustomerUsername($customer_username)
    {
        $this->customer_username = $customer_username;
    }

    /**
     * @return mixed
     */
    public function getCustomerPassword()
    {
        return $this->customer_password;
    }

    /**
     * @param mixed $customer_password
     */
    public function setCustomerPassword($customer_password)
    {
        $this->customer_password = $customer_password;
    }

    /**
     * @return mixed
     */
    public function getCustomerEmail()
    {
        return $this->customer_email;
    }

    /**
     * @param mixed $customer_email
     */
    public function setCustomerEmail($customer_email)
    {
        $this->customer_email = $customer_email;
    }

    /**
     * @return mixed
     */
    public function getCustomerPhone()
    {
        return $this->customer_phone;
    }

    /**
     * @param mixed $customer_phone
     */
    public function setCustomerPhone($customer_phone)
    {
        $this->customer_phone = $customer_phone;
    }

    /**
     * @return mixed
     */
    public function getCustomerAccountStatus()
    {
        return $this->customer_account_status;
    }

    /**
     * @param mixed $customer_account_status
     */
    public function setCustomerAccountStatus($customer_account_status)
    {
        $this->customer_account_status = $customer_account_status;
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

}

?>