<?php
namespace App\model;

class Product
{
    protected $id;
    protected $name;
    protected $price;
    protected $description;
    protected $producer;
    public function __construct($name,$price,$description,$producer)
    {
        $this->name=$name;
        $this->price=$price;
        $this->description=$description;
        $this->producer=$producer;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}