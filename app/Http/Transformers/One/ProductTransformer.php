<?php
namespace App\Http\Transformers\One;

use App\Product;
use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{

    /**
     * @param Product $product
     */
    public function transform(Product $product)
    {

        return [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'price' => "RM ".$product->price_per_unit,
            'published' => $product->published,
            'images' => [
                'thumbnails' => [
                    asset('images/sample.png'),
                    asset('images/sample.png'),
                    asset('images/sample.png'),
                    asset('images/sample.png'),
                ],
                'banners' => [
                    asset('images/sample.png'),
                    asset('images/sample.png'),
                    asset('images/sample.png'),
                    asset('images/sample.png'),
                ],
            ],
            'links' => [
                route('products.show', $product->id),
            ],

        ];
    }
}
