<?php
require_once 'Interface/ProductInterface.php';
require_once 'AbstractProduct.php';

class Product extends AbstractProduct implements ProductInterface
{
    /**
     * @var int
     */
    public int $id;
    /**
     * @var int
     */
    private int $art;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var int
     */
    private int $amount;
    /**
     * @var float
     */
    private float $price;
    /**
     * @var string
     */
    private string $description;
    /**
     * @var float
     */

    /**
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->ini('name');
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getArt(): int
    {
        return $this->ini('art');
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->ini('amount');
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->ini('price');
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->ini('description');
    }


    /**
     * @return int
     */
    public static function getStatic(): int
    {
        return self::$static;
    }


    public static function random()
    {
        return 12;
    }
    public static $static = 45;


    public function sort(): string
    {
        // TODO: Implement sort() method.
        return 1;
    }
}