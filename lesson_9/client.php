<?php

function client(Logistic $logistic, string $cargo):void
{
    $logistic->deliverCargo($cargo);
}
client(new LogisticPlane, "Coc");
//client(new LogisticTruck, "Cocjhk");
