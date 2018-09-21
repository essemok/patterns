<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 21.09.18
 * Time: 12:59
 */
namespace Patterns\Observer;

abstract class LoginObserver implements \SplObserver
{
    private $login;

    public function __construct(Login $login)
    {
        $this->login = $login;
        $login->attach($this);
    }

    public function update(\SplSubject $subject)
    {
        if ($subject === $this->login){
            $this->doUpdate($subject);
        }
    }

    abstract function doUpdate(Login $login);
}