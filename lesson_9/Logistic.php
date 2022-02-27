<?php

abstract class Logistic
{
    abstract public function getTransport():TransportInterface;

    public function deliverCargo(string $cargo):void
    {
        $tr = $this->getTransport();
        $tr->loadingAddress();
        $tr->unloadingAddress();
        $tr->deliver($cargo);
    }

}