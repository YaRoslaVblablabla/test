<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SubitemResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"       => $this->id,
            "title"    => $this->title,
            "source"   => $this->source,
            "count"    => $this->count,
            "laser"    => $this->laser,
            "welding"  => $this->welding,
            "cleaning" => $this->cleaning,
            "assembly" => $this->assembly,
            "electr"   => $this->electr,
            "subitems" => SubitemResource::collection($this->subitems)
        ]; 
    }
}
