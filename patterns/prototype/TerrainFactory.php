<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 11.09.18
 * Time: 13:02
 */
namespace Patterns\Prototype;

use Patterns\Prototype\Forest\Forest;
use Patterns\Prototype\Plains\Plains;
use Patterns\Prototype\Sea\Sea;

class TerrainFactory
{
    private $sea;
    private $plains;
    private $forest;

    public function __construct(Sea $sea, Plains $plains, Forest $forest)
    {
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }

    public function getSea()
    {
        return clone $this->sea;
    }

    public function getPlains()
    {
        return clone $this->plains;
    }

    public function getForest()
    {
        return clone $this->forest;
    }

}