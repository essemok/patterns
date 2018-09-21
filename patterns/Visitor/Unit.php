<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 12.09.18
 * Time: 10:26
 */
namespace Patterns\Visitor;

abstract class Unit
{
    protected $depth = 0;


    abstract function bombardStrenght();

    public function getComposite()
    {
        return null;
    }

    public function accept (ArmyVisitor $visitor)
    {
        $method = 'visit' . (new \ReflectionClass($this))->getShortName();
        $visitor->$method($this);
    }

    protected function setDepth($depth)
    {
        $this->depth = $depth;
    }

    public function getDepth()
    {
        return $this->depth;
    }



}