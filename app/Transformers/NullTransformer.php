<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class NullTransformer extends TransformerAbstract {
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [
        //
    ];
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected array $defaultIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     *
     * @param array $value
     *
     * @return array
     */
    public
    function transform(
        array $value,
    ): array {
        return $value;
    }
}
