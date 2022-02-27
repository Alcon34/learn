<?php

class LogisticPlane extends Logistic
{

public function getTransport(): TransportInterface
    {
        return new Plane();
    }
}