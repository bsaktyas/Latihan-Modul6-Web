<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Use the `map` method to transform each item in the collection
        return $this->collection->map(function ($item) use ($request) {
            // Transform each item using the ProductCategoryResource
            return (new ProductCategoryResource($item))->toArray($request);
        })->all(); // Use `all` to convert the collection to a plain PHP array
    }
}
