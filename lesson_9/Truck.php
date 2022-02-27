<?php

class Truck implements TransportInterface
{

    public function loadingAddress(): void
    {
        echo "Address loading is Truck: ";
    }

    public function unloadingAddress(): void
    {
        echo "Address loading is Truck: ";
    }

    public function deliver(string $cargo): void
    {
        echo "Type is delivery: ";
        echo $cargo;
    }
}