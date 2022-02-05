<?php
require_once 'Product.php';

class ProdVegetables extends Product
{
    private string $date;
    private string $land;
    private string $grade;

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getLand(): string
    {
        return $this->land;
    }

    /**
     * @return string
     */
    public function getGrade(): string
    {
        return $this->grade;
    }


}