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
                'poster' => 'http://3.122.199.78:8001/uploads/openings/'.$this->poster,
                'category' => $this->category,
                'vacancies' => $this->vacancy,
                'fee'  => $this->fee,
                'certificate' => $this->certificate,
        
        ];
    }
}
