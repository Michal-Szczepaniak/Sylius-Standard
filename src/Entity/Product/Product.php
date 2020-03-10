<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

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

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor(int $color): void
    {
        $this->color = $color;
    }
}
