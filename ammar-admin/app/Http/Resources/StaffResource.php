<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StaffResource extends JsonResource
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
            'name' => $this->name,
            'admin_id' => $request->id,
            'email' => $this->email,
            'password' => $this->password,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
