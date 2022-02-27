<?php

interface TransportInterface
{
    public function loadingAddress(): void;

    public function unloadingAddress(): void;

    public function deliver(string $cargo): void;

}