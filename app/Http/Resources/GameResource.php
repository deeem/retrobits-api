<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
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
            'rom' => $this->rom,
            'image' => $this->image,
            'platform' => [
                'id' => $this->platform->id,
                'name' => $this->platform->name,
                'slug' => $this->platform->slug,
            ]
        ];
    }
}