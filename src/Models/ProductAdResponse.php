<?php

declare(strict_types=1);

namespace PowerSrc\AmazonAdvertisingApi\Models;

use PowerSrc\AmazonAdvertisingApi\Concerns\MergesParentPropertyCasts;
use PowerSrc\AmazonAdvertisingApi\Enums\PrimitiveType;

class ProductAdResponse extends MutationResponse
{
    use MergesParentPropertyCasts;

    /**
     * The ID of the product ad that was created/updated, if successful.
     *
     * @var int
     */
    public $adId;

    /**
     * An array of types to cast values to on object creation.
     *
     * The property to cast is the key and the type to cast to is the value.
     *
     * @var array
     */
    private $casts = [
        'adId' => PrimitiveType::INT,
    ];
}
