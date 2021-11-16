<?php

namespace patterns\Observer;

use SplObserver;
use SplSubject;

class Order implements SplSubject
{
    protected $status = 'pending';

    /**
     * @var SplObserver[]
     */
    protected $observers = [];

    public function getStatus()
    {
        return $this->status;
    }

    public function changeStatus(string $status)
    {
        $this->status = $status;

        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        foreach ($this->observers as $key => $item) {
            if ($item === $observer) {
                unset($this->observers[$key]);
                break;
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}