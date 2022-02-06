<?php

abstract class AbstractProduct implements ProductInterface
{
    abstract public function getName(): string;
    abstract public function getId(): int;
    abstract public function getArt(): int;
    abstract public function getAmount(): int;
    abstract public function getPrice(): float;
    abstract public function getDescription(): string;

    protected function ini(string $table)
    {
        $servername = "localhost";
        $dbname = "learn";
        $username = "epoxid_web";
        $password = "hS96xDA_wi2Gx8ST_";
        $charset = 'utf8';
        $connection = new mysqli($servername, $username, $password, $dbname);
        $connection->set_charset($charset);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        //echo "Connected successfully <br>";

        $condition = $this->id;
        $str = $connection->query('SELECT '.$table.' FROM product WHERE id = '.$condition.'');
        $row = $str->fetch_row();
        return $row[0];
    }

}