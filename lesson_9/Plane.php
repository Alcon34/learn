<?php

class Plane implements TransportInterface
{

    public function loadingAddress(): void
    {
        echo "Address loading is Plane: ";
    }

    public function unloadingAddress(): void
    {
        echo "Address unloading is Plane: ";

    }

    public function deliver(string $cargo): void
    {
        echo "Type is delivery: ";
        echo $cargo;
    }
}