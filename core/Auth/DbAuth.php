<?php

class BDAuth{
    private $db; 

    public function __construct(Database $db)   
    {
        $this->db = $db; 
    }
    
    
    public function login($username,$password)  
    {
        $user = $this->db->prepare('SELECT * FROM user WHERE username = ?',[$username], null,true);
        var_dump($user);
    }

    public function logged()
    {
       return $_SESSION['auth'];
    }
}