<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 21.09.18
 * Time: 17:14
 */
namespace Patterns\Visitor;

abstract class ArmyVisitor
{
    abstract function visit(Unit $node);

    function visitFlamegunner(Flamegunner $node)
    {
        $this->visit($node);
    }

    function visitTank(Tank $node)
    {
        $this->visit($node);
    }

    function visitArmy(Army $node)
    {
        $this->visit($node);
    }
}