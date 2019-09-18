<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OpeningResource extends JsonResource
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
            
                'title' => $this->title,
                'desc' => $this->desc,
                'cost' => $this->cost,
                'start' => $this->start,
                'end' => $this->end,
                'poster' => $this->poster,
                'category' => $this->category,
                'vacancies' => $this->vacancy,
        
        ];
    }
}
