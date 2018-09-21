<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 21.09.18
 * Time: 17:23
 */
namespace Patterns\Visitor;

class TextArmyVisitor extends ArmyVisitor
{
    private $text = '';

    public function visit(Unit $node)
    {
        $txt         = '';
        $pad         = 4 * $node->getDepth();
        $txt        .= sprintf("%{$pad}s", "");
        $txt        .= get_class($node) . ": ";
        $txt        .= "Огневая мощь: " . $node->bombardStrenght() . "\n";
        $this->text .= $txt;
    }

    public function getText()
    {
        return $this->text;
    }

}