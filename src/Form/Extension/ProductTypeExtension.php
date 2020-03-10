<?php

declare(strict_types=1);

namespace App\Form\Extension;

use App\Entity\Product\Product;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;

final class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('color', ChoiceType::class, [
                'required' => true,
                'label' => 'app.form.product.color',
                'choices'  => array_flip(Product::PRODUCT_COLORS),
                'choice_label' => function(?int $category) {
                    return 'app.entity.product.product.' . $category;
                },
                'constraints' => [
                    new Length([
                        'min' => 0,
                        'max' => 2,
                        'groups' => ['sylius'],
                    ]),
                ],
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
