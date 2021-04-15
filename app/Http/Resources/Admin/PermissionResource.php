<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
{

    public function toArray($request)
    {
        return parent::toArray($request);/* [
            'id'    => $this->id,
            'title' => $this->title    
        ] */;
    }
}
