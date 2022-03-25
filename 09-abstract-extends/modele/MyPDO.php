<?php

class MyPDO extends PDO
{

    public function __construct(string $dsn, string|null $username, string|null $password ,array|null $options,bool $production=true)
    {
        parent::__construct($dsn,$username,$password,$options);
        if($production){
            $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
        }
    }
}