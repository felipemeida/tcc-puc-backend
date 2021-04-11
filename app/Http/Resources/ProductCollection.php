<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'quantity' => $this->quantity,
            'description' => $this->description,
            'brand' => $this->brand,
            'price' => $this->price,
            'category' => $this->category,
            'photo' => $this->photo,
        ];
    }
}
