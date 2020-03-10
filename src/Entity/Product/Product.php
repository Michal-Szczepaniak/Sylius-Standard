<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct
{
    public const PRODUCT_COLORS = [
        'red',
        'blue',
        'green',
    ];

    /**
     * @var int
     */
    protected $color;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor(int $color): void
    {
        $this->color = $color;
    }
}
