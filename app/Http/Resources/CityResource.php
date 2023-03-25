<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => (string)$this->id,
            "governorate_id" => (string)$this->governorate_id,
            "city_name_ar" => $this->city_name_ar,
            "city_name_en" => $this->city_name_en,
        ];
    }

    public function with($request){
        return [
          'status'=>'success'
        ];
    }
}
