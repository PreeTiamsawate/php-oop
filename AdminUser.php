<?php
//inherite from User class
class AdminUser extends User{
    //new property
    public $level;
    //overrided property
    public $role = 'admin';
    //new constructor
    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        //inherite from parrent
        parent::__construct($username, $email);
    }
    //overrided method
    public function addFriend()
    {
        return "$this->username added new member";
    }
}
?>