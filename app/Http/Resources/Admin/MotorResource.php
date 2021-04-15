<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class MotorResource extends JsonResource
{

    public function toArray($request)
    {
        return parent::toArray($request) /* [
            'id'        => $this->id,
            'name'      => $this->name,
            'year'      => $this->year,
            'capasity'  => $this->capasity,
            'type'      => $this->type
        ] */;
    }
}
