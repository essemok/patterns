<?php
/**
 * Created by PhpStorm.
 * User: tobimaru
 * Date: 21.09.18
 * Time: 9:51
 */
namespace Patterns\Observer;

class Login implements \SplSubject
{
    const LOGIN_WRONG_NAME      = 1;
    const LOGIN_WRONG_PASSWORD  = 2;
    const LOGIN_ACCESS          = 3;

    private $status = [];
    private $storage;

    public function __construct()
    {
        $this->storage = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    public function notify()
    {
        foreach ($this->storage as $obs){
            $obs->update($this);
        }
    }


    public function handleRequest($userName, $password, $ip)
    {
        $isValid = false;
        switch (rand(1,3)){
            case 1:
                $this->setStatus(self::LOGIN_ACCESS, $userName, $ip);
                $isValid = true;
                break;
            case 2:
                $this->setStatus(self::LOGIN_WRONG_NAME, $userName, $ip);
                $isValid = false;
                break;
            case 3:
                $this->setStatus(self::LOGIN_WRONG_PASSWORD, $userName, $ip);
                $isValid = false;
                break;
        }
        $this->notify();
        return $isValid;
    }

    private function setStatus($status, $userName, $ip)
    {
        $this->status = [$status, $userName, $ip];
    }

    public function getStatus()
    {
        return $this->status;
    }
}