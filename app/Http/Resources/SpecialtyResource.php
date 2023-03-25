<?php

namespace App\Http\Resources;

use App\Models\Service;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecialtyResource extends JsonResource
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
            "name_ar" => $this->name_ar,
            "name_en" => $this->name_en,
            "disabled" => (string)$this->disabled,
            "image" => $this->image,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
