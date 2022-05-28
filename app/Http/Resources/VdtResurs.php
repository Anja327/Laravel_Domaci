<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VdtResurs extends JsonResource
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
            'Id - ' => $this->resource->id,
            'Ime - ' => $this->resource->ime,
            'Prezime - ' => $this->resource->prezime,
            'Plata - ' => $this->resource->plata,
            'Instagram - ' => $this->resource->instagram,
        ];
    }
}
