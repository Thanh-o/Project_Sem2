<?php

class Admin {
    public $admin_id;
    public $admin_username;
    public $admin_password;

    /**
     * @param $admin_id
     * @param $admin_password
     * @param $admin_username
     */
    public function __construct($admin_id, $admin_password, $admin_username)
    {
        $this->admin_id = $admin_id;
        $this->admin_password = $admin_password;
        $this->admin_username = $admin_username;
    }

    /**
     * @return mixed
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * @param mixed $admin_id
     */
    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;
    }

    /**
     * @return mixed
     */
    public function getAdminUsername()
    {
        return $this->admin_username;
    }

    /**
     * @param mixed $admin_username
     */
    public function setAdminUsername($admin_username)
    {
        $this->admin_username = $admin_username;
    }

    /**
     * @return mixed
     */
    public function getAdminPassword()
    {
        return $this->admin_password;
    }

    /**
     * @param mixed $admin_password
     */
    public function setAdminPassword($admin_password)
    {
        $this->admin_password = $admin_password;
    }
}
?>