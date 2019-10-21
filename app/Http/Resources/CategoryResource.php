<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\OpeningResource as OpeningResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'id' => $this->id,
                'title' => $this->title,
                'description' => $this->description,
                'opening' => OpeningResource::collection($this->whenLoaded('opening')),
        ];
    }
}
