<?php

class UserModel
{
    public $username;
    private $password;
    protected $email;
    public $isAdmin = false;

    /**
     * Constructor Function
     *
     * @param String $username
     * @param String $email
     * @param String $password
     */
    public function __construct(String $username, String $email, String $password)
    {
        $this->email    = $email;
        $this->username = $username;
        $this->password = $password;
    }
}