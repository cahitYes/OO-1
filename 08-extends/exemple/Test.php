<?php

class Test
{
    public $public = "public";
    protected $protected = "protected";
    private $private = "private";

    /**
     * @return string
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * @param string $public
     *
     * @return Test
     */
    public function setPublic($public)
    {
        $this->public = $public;
        return $this;
    }

    /**
     * @return string
     */
    public function getProtected()
    {
        return $this->protected;
    }

    /**
     * @param string $protected
     *
     * @return Test
     */
    public function setProtected($protected)
    {
        $this->protected = $protected;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * @param string $private
     *
     * @return Test
     */
    public function setPrivate($private)
    {
        $this->private = $private;
        return $this;
    }
    public function getSayCoucou(){
        return $this->sayCoucou();
    }
    private function sayCoucou(){
        return "coucou";
    }
}