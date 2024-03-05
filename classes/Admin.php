<?php

class Admin extends User{
    public int $accessLevel = 1;

    public function _construct(int $id,int $password,int $username,int $accessLevel){
        parent::_construct($id,$password,$username,$accessLevel);
        $this->accesslevel = $accesslevel;
    }
}