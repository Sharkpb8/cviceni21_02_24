<?php

class User
{
    public $id;
    protected $password;
    protected $username;

    public _construct(int $id,int $password,int $username)
    {
        $this->id = $id;
        $this->password = $password;
        $this->username = $username;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->$id;
    }

    public static function bark()
    {
        echo "BARK!"
    }

    public function setPassword(string $password):void
    {
        $this->password = $password
    }

    public function getPasword(): string
    {
        return $this->$password;
    }

    public function setUsername(string $username):void
    {
        $this->username = $username
    }

    public function getUsername():string 
    {
        return $this->$username;
    }
}