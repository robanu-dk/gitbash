<?php

namespace App\Models;

class Product
{

    private static $product = [
        'title' => 'Product'
    ];

    public static function all()
    {
        return self::$product;
    }

}
