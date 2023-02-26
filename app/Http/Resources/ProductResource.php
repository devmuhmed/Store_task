<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'type' => $this->type,
            'stock' => $this->stock,
            'description' => $this->description,
            'active' => $this->active,
            'verified' => $this->verified,
            'featured' => $this->featured,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'game_id' => $this->game_id,
        ];
    }
}
