<?php
class User

{
    //protected modifier can be accessed from child class
    // but not directly like pulblic
    protected $username;
    private $email;
    public $role ='member';

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend()
    {

        return "$this->username added new friend";
    }
    //getters
    public function getEmail()
    {

        return $this->email;
    }
    //setters
    public function setEmail($email){
        if(strpos($email,'@') > -1){
            $this->email = $email;
        }

    }
}
?>