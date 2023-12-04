<?php

namespace App\Helpers;
class ProductsHelper {

    const productPriorities = [1,2,3,4,5,6,7,8];
    public static function getPriorities(): array
    {
        return self::productPriorities;
    }
}
