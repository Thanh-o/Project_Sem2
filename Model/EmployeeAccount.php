<?php

class EmployeeAccount {
    public $employee_id;
    public $admin_id;
    public $employee_username;
    public $employee_password;
    public $employee_account_status;

    /**
     * @param $employee_id
     * @param $admin_id
     * @param $employee_username
     * @param $employee_password
     * @param $employee_account_status
     */
    public function __construct($employee_id, $admin_id, $employee_username, $employee_password, $employee_account_status)
    {
        $this->employee_id = $employee_id;
        $this->admin_id = $admin_id;
        $this->employee_username = $employee_username;
        $this->employee_password = $employee_password;
        $this->employee_account_status = $employee_account_status;
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
    public function getEmployeeUsername()
    {
        return $this->employee_username;
    }

    /**
     * @param mixed $employee_username
     */
    public function setEmployeeUsername($employee_username)
    {
        $this->employee_username = $employee_username;
    }

    /**
     * @return mixed
     */
    public function getEmployeePassword()
    {
        return $this->employee_password;
    }

    /**
     * @param mixed $employee_password
     */
    public function setEmployeePassword($employee_password)
    {
        $this->employee_password = $employee_password;
    }

    /**
     * @return mixed
     */
    public function getEmployeeAccountStatus()
    {
        return $this->employee_account_status;
    }

    /**
     * @param mixed $employee_account_status
     */
    public function setEmployeeAccountStatus($employee_account_status)
    {
        $this->employee_account_status = $employee_account_status;
    }


}
?>