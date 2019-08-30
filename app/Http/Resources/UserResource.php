<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'username' => $this->username,
            'email'  => $this->email,
            'first_name'  => $this->first_name,
            'last_name'  => $this->last_name,
            'date_of_birth' => $this->date_of_birth,  
            'mobile_number' => $this->mobile_number,
            'nationality' => $this->nationality,
            'gender' => $this->status->gender,
            'marital_status' => $this->status->marital_status,
            'city' => $this->location->city,
            'district' => $this->location->district,
            'ward' => $this->location->ward,
        ];
    }
}
