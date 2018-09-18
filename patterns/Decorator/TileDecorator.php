<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 18.09.18
 * Time: 14:02
 */
namespace Patterns\Decorator;

abstract class TileDecorator extends Tile
{
    protected $tile;

    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }

}