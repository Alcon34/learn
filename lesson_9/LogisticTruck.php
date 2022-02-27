<?php


class LogisticTruck extends Logistic
{
    public function getTransport(): TransportInterface
    {
        return new Truck();
    }
}