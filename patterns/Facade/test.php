<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 18.09.18
 * Time: 14:54
 */
namespace Patterns\Facade;

function getProductFileLines($file){
    return file($file);
}

function getProductObjectFromId($id, $productName){
    //якобы выполняем запрос к БД
    return new Product($id, $productName);
}

function getNameFromLine($line){
    if (preg_match(("/.*-(.*)\s\d+/"), $line, $array)){
        return str_replace('_', ' ', $array[1]);
    }
    return '';
}

function getIdFromLine($line){
    if (preg_match("/^(\d{1,3})-/", $line, $array)){
        return $array[1];
    }
    return -1;
}

class Product
{
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

class ProductFacade
{
    public $file;
    private $products = [];

    public function __construct($file)
    {
        $this->file = $file;
        $this->compile();
    }

    private function compile()
    {
        $lines = getProductFileLines($this->file);
        foreach ($lines as $line){
            $id = getIdFromLine($line);
            $name = getNameFromLine($line);
            $this->products[$id] = getProductObjectFromId($id, $name);
        }
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getProduct($id)
    {
        if (isset($this->products[$id])){
            return $this->products[$id];
        }
        return null;
    }
}